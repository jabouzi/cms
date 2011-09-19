<?php

class Login extends CI_Controller
{
    private $errors = array();
    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('class_decrypt');
    }    
    
    function index()
    {
        if (isset($this->session->userdata['user']))
        {
            redirect('admin');
        }
        else
        {
            $this->load->view('login');
        }
    }    
    
    function userloginaction()
    {   
        $error = 'Your username or password is invalid';
        if (!$this->user_login_valid(strtolower($_POST['username']),strtolower($_POST['password']))) $this->errors[0] = $error;
        if (empty($this->errors))
        {
            $data['user'] = $_POST['username'];
            $user = $this->user_model->get_name($_POST['username']);
            $this->session->set_userdata('name',$user[0]->user_first_name.' '.$user[0]->user_family_name);     
            $this->session->set_userdata($data);
                
            redirect('admin');
        }
        else
        {
            $this->load->view('login',array('errors'=>$this->errors));         
        }
    }
    
    function logout()
    {        
        $this->session->unset_userdata('user');      
        $this->session->unset_userdata('name');        
        redirect('login');        
    }
    
    private function user_login_valid($username,$password)
    {
        $userpassword = $this->user_model->check_login($username,$password);
        $array2 = class_decrypt::keycalc('skanderjabouzi.com');
        $array = class_decrypt::stringtoarray($userpassword[0]->user_password);
        if ($password == class_decrypt::transformstring($array, $array2))
        {
           return true;     
        }
        return false;       
    }
    
    private function get_user_location()
    {
        if(!@$_COOKIE["geolocation"]){
            $ipinfodb = new ipinfodb;
            $ipinfodb->setKey('9e399207f85522c328d415081c607f9f18563342bd38c4a014c95800b92fff8b');
         
            $visitorGeolocation = $ipinfodb->getGeoLocation($_SERVER['REMOTE_ADDR']);
            if ($visitorGeolocation['Status'] == 'OK') {
                base64_encode(serialize($visitorGeolocation));
                setcookie("geolocation", @$data, time()+3600*24*7); 
            }
        }else{
            $visitorGeolocation = unserialize(base64_decode($_COOKIE["geolocation"]));
        }
         
        return $visitorGeolocation;
    }   

}
