<?php

class Admin extends CI_Controller
{
    private $errors = array();
    
    function __construct() 
    {
         parent::__construct();
    }
    
    function index()
    {
        $data['title'] = "My Blog Title";
        $data['heading'] = "My Blog Heading";
        $data['todo'] = array('clean house', 'eat lunch', 'call mom');
        //$this->mysmarty->assign('test', $data);
        //$this->mysmarty->view('template_view');
        //$this->load->view('blog_view',$data);
        
    }
    
}

?>
        

