<?php

class Index extends CI_Controller
{
    private $errors = array();
    
    function __construct() 
    {
         parent::__construct();
    }
    
    function index()
    {
        $data['title'] = "Skander Jabouzi's web site";
        $data['heading'] = "Just another blog";
        //$this->mysmarty->assign('test', $data);
        //$this->mysmarty->view('template_view');
        $this->load->view('index_view',$data);
        
    }
    
}

?>
        

