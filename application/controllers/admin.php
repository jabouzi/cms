<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
class Admin extends CI_Controller
{
    private $errors = array();
    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->model('comment_model');
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
            $active = array('','','','');
            $data['active'] = $active;
            $header_data['user_name'] = $this->session->userdata['name'];
            $js[] = base_url()."public/cleeditor/jquery.cleditor.min.js";
            $css[] = base_url()."public/cleeditor/jquery.cleditor.css";
            $data['javascript'] = $js;
            $data['stylesheet'] = $css;
            $this->load->view('admin_header',$data);  
            $this->load->view('admin_topmenu',$header_data);        
            $this->load->view('admin_leftmenu',$data);
            $this->load->view('admin_editpost');    
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

    function create_post()
    {
        if (isset($this->session->userdata['user']))
        {
            var_dump($_POST);
            if ($_POST['post_title'] == '') $this->errors[] = "The post title is mandatory";
            if ($_POST['post_content'] == '') $this->errors[] =  "The post content is mandatory";
            if (empty($this->errors))
            {
                
                
            }
            else
            {
               
            }            
        }
        else
        {
            redirect('login/');
        }
    }

    function create_category()
    {
        
    }    
}

?>
