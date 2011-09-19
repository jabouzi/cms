<?php

class Commwent_model extends CI_Model 
{
    public function get_all()
    {
        $data = $this->db->get('cms_comments');
        return $data->result();
    }
    
    public function get_all_active()
    {
        $this->db->where('comment_status','publish');
        $data = $this->db->get('cms_comments');
        return $data->result();
    }    
    
    public function get_comment($id)
    {        
        $this->db->where('comment_id',$id);
        return $this->db->get('cms_comments')->result();
    }    

    public function get_post_comments($id)
    {        
        $this->db->where('post_id',$id);
        return $this->db->get('cms_comments')->result();
    }    

    public function order_page($limit,$offset,$order_by, $type)
    {
        $this->db->order_by($order_by, $type);
        $orders = $this->db->get('cms_comments',$limit,$offset);
        return $orders->result();
    }
    
    public function add_comment($data)
    {
        $this->db->insert('cms_comments', array(
            'post_id' => $data['post_id'], 
            'comment_date' => $data['comment_date'],          
            'comment_status' => $data['comment_status'],             
        ));      

        return $this->db->insert_id();
    }
    
    public function delete_comment($id)
    {
        $this->db->where('comment_id',$id);
        $this->db->delete('cms_comments');
    }
    
    public function update_comment($id, $data)
    {
        $this->db->where('comment_id',$id);     
        $this->db->update('cms_comments',array(            
            'post_id' => $data['post_id'], 
            'comment_date' => $data['comment_date'],          
            'comment_status' => $data['comment_status'],  
        ));       
    }
}
