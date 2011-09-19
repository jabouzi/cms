<?php

class User_model extends CI_Model 
{
    public function get_all()
    {
        $data = $this->db->get('cms_users');
        return $data->result();
    }    
    
    public function get_id($email)
    {        
        $this->db->select('user_id');
        $this->db->where('user_email',$email);
        $data = $this->db->get('cms_users')->result();
        if (count($data)) return $data[0]->id;
        else return false;
    }
    
    public function get_type($email)
    {        
        $this->db->select('user_type');
        $this->db->where('user_email',$email);
        return $this->db->get('cms_users')->result();
    }
    
    public function get_province($email)
    {        
        $this->db->select('user_province');
        $this->db->where('user_email',$email);
        $data = $this->db->get('cms_users');
        return $data->result();
    }
    
    public function get_name($email)
    {
        $this->db->select('user_family_name');
        $this->db->select('user_first_name');
        $this->db->where('user_email',$email);
        $data = $this->db->get('cms_users');
        return $data->result();
    }
    
    public function get_user_infos($id)
    {
        $this->db->where('user_id',$id);
        $data = $this->db->get('cms_users');
        return $data->result();
    }
    
    public function check_login($username, $password)
    {
        $this->db->select('user_password');
        $this->db->where('user_email',$username);
        $data = $this->db->get('cms_users');
        return $data->result();
    }
    
    public function add_user($data)
    {
        $this->db->insert('cms_users', array(            
            'user_family_name' => $data['family_name'], 
            'user_first_name' => $data['first_name'], 
            'user_address' => $data['address'], 
            'user_town' => $data['town'], 
            'user_postal_code' => $data['postal_code'], 
            'user_phone' => $data['phone'], 
            'user_email' => $data['email'], 
            'user_password' => $data['password'], 
            'user_active' => $data['active'], 
            'user_type' => $data['type'],
            //'user_date_created' => date('Y-m-d H:i:s'),
        ));      

        return $this->db->insert_id();
    }
    
    public function delete_user($id)
    {
        $this->db->where('user_id',$id);
        $this->db->delete('cms_users');
    }
    
    public function update_user($id, $data)
    {
        $this->db->where('user_id',$id);     
        $this->db->update('cms_users',array(            
            'user_family_name' => $data['family_name'], 
            'user_first_name' => $data['first_name'], 
            'user_address' => $data['address'], 
            'user_town' => $data['town'], 
            'user_postal_code' => $data['postal_code'], 
            'user_phone' => $data['phone'], 
            'user_email' => $data['email'], 
            'user_password' => $data['password'], 
            'user_active' => $data['active'], 
            'user_type' => $data['type'],
            //'date_modif' => date('Y-m-d H:i:s'), 
        ));   
       
    }
}
