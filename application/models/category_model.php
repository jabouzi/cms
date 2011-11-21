<?php

class Category_model extends CI_Model 
{
    public function get_all()
    {
        $data = $this->db->get('cms_tags');
        return $data->result();
    }

    public function count()
    {     
        return $this->db->count_all('cms_tags');
    }
    
    public function get_tag($id)
    {        
        $this->db->where('tag_id',$id);
        return $this->db->get('cms_tags')->result();
    }
    
    public function get_tag_by_name($tag)
    {        
        $this->db->where('tag_name',$tag);
        return $this->db->get('cms_tags')->result();
    }    

    public function get_post_tags($id)
    {        
        $this->db->where('post_id',$id);
        return $this->db->get('cms_posts_tags')->result();
    }
   
    public function add_tag($data)
    {
        $this->db->insert('cms_tags', array(
            'tag_name' => $data['tag_name'],
            'tag_date' => $data['tag_date'],
            'tag_modified' => $data['tag_modified'],         
        ));      

        return $this->db->insert_id();
    }
    
    public function delete_tag($id)
    {
        $this->db->where('tag_id',$id);
        $this->db->delete('cms_tags');
    }
    
    public function update_tag($id, $data)
    {
        $this->db->where('tag_id',$id);     
        $this->db->update('cms_tags',array(            
            'tag_name' => $data['tag_name'],
            'tag_date' => $data['tag_date'],
            'tag_modified' => $data['tag_modified'], 
        ));       
    }
    
    public function add_post_tag($data)
    {
        $this->db->insert('cms_posts_tags', array(
            'tag_id' => $data['tag_id'],
            'post_id' => $data['post_id'],
            'post_tag_date' => $data['post_tag_date'],
            'post_tag_modified' => $data['post_tag_modified'],            
        ));      

        return $this->db->insert_id();
    }
    
    public function delete_post_tags($id)
    {
        $this->db->where('post_id',$id);
        $this->db->delete('cms_posts_tags');
    }    
}
