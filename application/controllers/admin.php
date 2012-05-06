<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Admin extends CI_Controller
{
    private $errors = array();
    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->model('comment_model');
        $this->load->model('category_model');
        $this->load->library('class_decrypt');
    }    
    
    function index()
    {    
        if (isset($this->session->userdata['user']))
        {
            $active = set_active_menu(0);
            $data['active'] = $active;
            $header_data['user_name'] = $this->session->userdata['name'];
            $this->load->view('admin_header');    
            $this->load->view('admin_topmenu',$header_data);    
            $this->load->view('admin_leftmenu',$data);    
            $this->load->view('admin_dashboard');    
            $this->load->view('admin_footer');
        }
        else
        {
            redirect('login/');
        }
    }
    
    function posts()
    {    
        if (isset($this->session->userdata['user']))
        {
            $active = set_active_menu(1);
            $data['active'] = $active;
            $header_data['user_name'] = $this->session->userdata['name'];
            $post_data['posts'] = $this->post_model->get_posts_infos();
            $this->load->view('admin_header');    
            $this->load->view('admin_topmenu',$header_data);      
            $this->load->view('admin_leftmenu',$data);    
            $this->load->view('admin_posts',$post_data);    
            $this->load->view('admin_footer');
        }
        else
        {
            redirect('login/');
        }
    }
    
    function newpost()
    {    
        if (isset($this->session->userdata['user']))
        {
            $post_data['save'] = '';
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $new_id = $this->add_post($_POST);
                if (isset($_POST['post_categories']))
                {
                    $this->update_post_categories($new_id, $_POST['post_categories']);       
                }         
                redirect('admin/editpost/'.$new_id);               
            }
            
            $active = set_active_menu(2);
            $data['active'] = $active;
            $header_data['user_name'] = $this->session->userdata['name'];
            $js[] = base_url()."public/cleeditor/jquery.cleditor.min.js";
            $css[] = base_url()."public/cleeditor/jquery.cleditor.css";            
            $data['javascript'] = $js;
            $data['stylesheet'] = $css;
            $post_data['categories'] = $this->category_model->get_all();
            $this->load->view('admin_header',$data);    
            $this->load->view('admin_topmenu',$header_data);        
            $this->load->view('admin_leftmenu',$data);
            $this->load->view('admin_newpost',$post_data);    
            $this->load->view('admin_footer');        
        }
        else
        {
            redirect('login/');
        }
    }
    
    function editpost($post_id)
    {
        if (isset($this->session->userdata['user']))
        {
            if (empty($post_id))
            {
                redirect('admin/newpost/');
            }

            $post_data['save'] = '';
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                //ini_set('xdebug.var_display_max_data', 8000 );
                //var_dump($_POST['post_content']);exit;
                $this->update_post($post_id, $_POST);
                if (isset($_POST['post_categories']))
                {
                    $this->update_post_categories($post_id, $_POST['post_categories']);
                }
            }
            
            $active = set_active_menu(1);
            $data['active'] = $active;
            $header_data['user_name'] = $this->session->userdata['name'];
            $js[] = base_url()."public/cleeditor/jquery.cleditor.min.js";
            $css[] = base_url()."public/cleeditor/jquery.cleditor.css";
            $data['javascript'] = $js;
            $data['stylesheet'] = $css;
            $post_data['post'] = $this->post_model->get_post($post_id);
            $post_categories = $this->category_model->get_post_categories($post_id);
            $post_data['categories'] = $this->category_model->get_all();
            $post_data['post_categories'] = array();
            foreach($post_categories as $category)
            {
                $post_data['post_categories'][] = $category->category_id;
            }
            $post_data['next_status'] = 'Publish';
            if ($post_data['post'][0]->post_status == 'publish')
            {
                $post_data['next_status'] = 'Unpublish';
            }
            $this->load->view('admin_header',$data);  
            $this->load->view('admin_topmenu',$header_data);        
            $this->load->view('admin_leftmenu',$data);
            $this->load->view('admin_editpost',$post_data);    
            $this->load->view('admin_footer');
        }
        else
        {
            redirect('login/');
        }
    }
    
    function comments()
    {    
        if (isset($this->session->userdata['user']))
        {
            $active = set_active_menu(3);
            $data['active'] = $active;
            $header_data['user_name'] = $this->session->userdata['name'];
            $comments_data['comments'] = $this->comment_model->get_all();
            $this->load->view('admin_header');    
            $this->load->view('admin_topmenu',$header_data);    
            $this->load->view('admin_leftmenu',$data);
            $this->load->view('admin_comments',$comments_data);    
            $this->load->view('admin_footer');
        }
        else
        {
            redirect('login/');
        }
    }
    
    function categories()
    {    
        if (isset($this->session->userdata['user']))
        {
            $active = set_active_menu(4);
            $data['active'] = $active;
            $header_data['user_name'] = $this->session->userdata['name'];
            $categories_data['categories'] = $this->category_model->get_all();
            $this->load->view('admin_header');    
            $this->load->view('admin_topmenu',$header_data);    
            $this->load->view('admin_leftmenu',$data);
            $this->load->view('admin_categories',$categories_data);    
            $this->load->view('admin_footer');
        }
        else
        {
            redirect('login/');
        }
    }

    function add_category($category_name)
    {
        if (isAjax())
        {
            $category = $this->category_model->get_category_by_name(urldecode($category_name));
            if (count($category))
            {
                echo 0;
            }
            else
            {
                $category_data =  array(
                    'category_name' => urldecode($category_name),
                    'category_date' => date('Y-m-d H:i:s'),
                    'category_modified' => '',         
                );
                $category_id = $this->category_model->add_category($category_data);
                echo $category_id;
            }
        }
    }
    
    function add_full_category($cat_name, $cat_active, $cat_parent)
    {
        $active = 0;
        if ('true' == $cat_active) $active = 1;
        $data = array();
        $data['category_name'] = $cat_name;
        $data['category_parent_id'] = $cat_parent;
        $data['category_active'] = $active;
        $data['category_date'] = date('Y-m-d H:i:s');
        $data['category_modified'] = ''; 
        $this->category_model->add_full_category($data);
    }
    
    function get_category_info($cat_id)
    {
        if (isAjax())
        {
            $category = $this->category_model->get_category($cat_id);
            echo json_encode($category[0]);
        }
    }
    
    function save_category_info($cat_id, $cat_name, $cat_active, $cat_parent)
    {
        $active = 0;
        if ('true' == $cat_active) $active = 1;
        $data = array();
        $data['category_name'] = $cat_name;
        $data['category_parent_id'] = $cat_parent;
        $data['category_active'] = $active;
        $data['category_modified'] = date('Y-m-d H:i:s');
        $this->category_model->update_category($cat_id, $data);
    }
    
    private function update_post($post_id, $post_data)
    {
        if (isset($post_data['publish']))
        {
            $this->post_model->update_post_field($post_id, 'post_status', 'publish');                   
        }
        else if (isset($post_data['unpublish']))
        {
            $this->post_model->update_post_field($post_id, 'post_status', 'unpublish');                    
        }
                      
        $this->post_model->update_post_field($post_id, 'post_title', $post_data['post_title']);
        $this->post_model->update_post_field($post_id, 'post_custom_url', $post_data['post_url']);
        $this->post_model->update_post_field($post_id, 'post_content', $post_data['post_content']);
        $this->post_model->update_post_field($post_id, 'post_modified', date('Y-m-d H:i:s'));
    }
    
    private function add_post($post_data)
    {
        $publish =  'unpublish';     
        if (isset($post_data['publish']))
        {
            $publish =  'publish';                   
        }
        
        $post_new_data = array(
            'post_author' => '1', 
            'post_date' => date('Y-m-d H:i:s'), 
            'post_content' => $post_data['post_content'], 
            'post_title' => $post_data['post_title'], 
            'post_status' => $publish, 
            'post_comment_status' => 'open', 
            'post_name' => '', 
            'post_modified' => '', 
            'post_type' => 'post', 
            'post_comment_count' => 0, 
            'post_view_count' => 0, 
            'post_custom_url' => $post_data['post_url'], 
        );               
        
        return $this->post_model->add_post($post_new_data);
    }
    
    private function update_post_categories($post_id, $categories)
    {
        $this->category_model->delete_post_categories($post_id);
        foreach($categories as $category_id)
        {
            $post_categories_data = array(
                'category_id' => $category_id,
                'post_id' => $post_id,
                'post_category_date' => date('Y-m-d H:i:s'),
                'post_category_modified' => '',            
            );
            $this->category_model->add_post_category($post_categories_data);
        }
        $post_data['save'] = 'success'; 
    }
}

?>
