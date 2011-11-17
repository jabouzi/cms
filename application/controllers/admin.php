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
            $active = array('active','','','');
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
            $active = array('','active','','');
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
                $publish =  'unpublish';     
                if (isset($_POST['publish']))
                {
                    $publish =  'publish';                   
                }
                
                $post_new_data = array(
                    'post_author' => '1', 
                    'post_date' => date('Y-m-d H:i:s'), 
                    'post_content' => $_POST['post_content'], 
                    'post_title' => $_POST['post_title'], 
                    'post_status' => $publish, 
                    'post_comment_status' => 'open', 
                    'post_name' => '', 
                    'post_modified' => '', 
                    'post_type' => 'post', 
                    'post_comment_count' => 0, 
                    'post_view_count' => 0, 
                    'post_custom_url' => $_POST['post_url'], 
                );

                $new_id = $this->post_model->add_post($post_new_data);
                redirect('admin/editpost/'.$new_id);               
            }
            
            $active = array('','','','active');
            $data['active'] = $active;
            $header_data['user_name'] = $this->session->userdata['name'];
            $js[] = base_url()."public/cleeditor/jquery.cleditor.min.js";
            $css[] = base_url()."public/cleeditor/jquery.cleditor.css";            
            $data['javascript'] = $js;
            $data['stylesheet'] = $css;
            $this->load->view('admin_header',$data);    
            $this->load->view('admin_topmenu',$header_data);        
            $this->load->view('admin_leftmenu',$data);
            $this->load->view('admin_newpost');    
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
                if (isset($_POST['publish']))
                {
                    $this->post_model->update_post_field($post_id, 'post_status', 'publish');                   
                }
                else if (isset($_POST['unpublish']))
                {
                    $this->post_model->update_post_field($post_id, 'post_status', 'unpublish');                    
                }
                              
                $this->post_model->update_post_field($post_id, 'post_title', $_POST['post_title']);
                $this->post_model->update_post_field($post_id, 'post_custom_url', $_POST['post_url']);
                $this->post_model->update_post_field($post_id, 'post_content', $_POST['post_content']);
                $this->post_model->update_post_field($post_id, 'post_modified', date('Y-m-d H:i:s'));

                $post_data['save'] = 'success'; 
                
            }
            
            $active = array('','','','');
            $data['active'] = $active;
            $header_data['user_name'] = $this->session->userdata['name'];
            $js[] = base_url()."public/cleeditor/jquery.cleditor.min.js";
            $css[] = base_url()."public/cleeditor/jquery.cleditor.css";
            $data['javascript'] = $js;
            $data['stylesheet'] = $css;
            $post_data['post'] = $this->post_model->get_post($post_id);
            $tags = $this->category_model->get_post_tags($post_id);
            $post_data['tags'] = array();
            foreach($tags as $tag)
            {
                $tag_info = $this->category_model->get_tag($tag->tag_id);
                $post_data['tags'][] = $tag_info[0]->tag_name;
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
            $active = array('','','active','');
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
}

?>
