<?php

class Category_model extends CI_Model 
{
    public function get_all()
    {
        $data = $this->db->get('cms_categories');
        return $data->result();
    }

    public function count()
    {     
        return $this->db->count_all('cms_categories');
    }
    
    public function get_category($id)
    {        
        $this->db->where('category_id',$id);
        return $this->db->get('cms_categories')->result();
    }
    
    public function get_category_by_name($category)
    {        
        $this->db->where('category_name',$category);
        return $this->db->get('cms_categories')->result();
    }    

    public function get_post_categories($id)
    {        
        $this->db->where('post_id',$id);
        return $this->db->get('cms_posts_categories')->result();
    }
   
    public function add_category($data)
    {
        $this->db->insert('cms_categories', array(
            'category_name' => $data['category_name'],
            'category_date' => $data['category_date'],
            'category_modified' => $data['category_modified'],         
        ));      

        return $this->db->insert_id();
    }
    
    public function delete_category($id)
    {
        $this->db->where('category_id',$id);
        $this->db->delete('cms_categories');
    }
    
    public function update_category($id, $data)
    {
        $this->db->where('category_id',$id);     
        $this->db->update('cms_categories',array(            
            'category_name' => $data['category_name'],
            'category_date' => $data['category_date'],
            'category_modified' => $data['category_modified'], 
        ));       
    }
    
    public function add_post_category($data)
    {
        $this->db->insert('cms_posts_categories', array(
            'category_id' => $data['category_id'],
            'post_id' => $data['post_id'],
            'post_category_date' => $data['post_category_date'],
            'post_category_modified' => $data['post_category_modified'],            
        ));      

        return $this->db->insert_id();
    }
    
    public function delete_post_categories($id)
    {
        $this->db->where('post_id',$id);
        $this->db->delete('cms_posts_categories');
    }    
}
