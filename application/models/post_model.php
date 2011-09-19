<?php

class Post_model extends CI_Model 
{
    public function get_all()
    {
        $data = $this->db->get('cms_posts');
        return $data->result();
    }

    public function count()
    {     
        return $this->db->count_all('cms_posts');
    }
    
    public function get_all_active()
    {
        $this->db->where('post_status','publish');
        $data = $this->db->get('cms_posts');
        return $data->result();
    }    
    
    public function get_post($id)
    {        
        $this->db->where('post_id',$id);
        return $this->db->get('cms_posts')->result();
    }
    
    public function get_posts_infos()
    {
        $this->db->select('post_id,post_title,post_date,post_comment_count');
        $posts = $this->db->get('cms_posts');
        return $posts->result();
    }
    
    public function get_posts_infos_page($limit,$offset,$order_by,$type)
    {
        $this->db->select('post_id,post_title,post_date,post_comment_count');
        $this->db->order_by($order_by, $type);
        return $this->db->get('cms_posts',$limit,$offset)->result();
    }

    public function posts_page($limit,$offset,$order_by, $type)
    {
        $this->db->order_by($order_by, $type);
        $posts = $this->db->get('cms_posts',$limit,$offset);
        return $posts->result();
    }
    
    public function add_post($data)
    {
        $this->db->insert('cms_posts', array(
            'post_author' => $data['post_author'], 
            'post_date' => $data['post_date'], 
            'post_content' => $data['post_content'], 
            'post_title' => $data['post_title'], 
            'post_status' => $data['post_status'], 
            'post_comment_status' => $data['post_comment_status'], 
            'post_name' => $data['post_name'], 
            'post_modified' => $data['post_modified'], 
            'post_type' => $data['post_type'], 
            'post_comment_count' => $data['post_comment_count'], 
            'post_view_count' => $data['post_view_count'], 
            'post_custom_url' => $data['post_custom_url'], 
        ));      

        return $this->db->insert_id();
    }
    
    public function delete_post($id)
    {
        $this->db->where('post_id',$id);
        $this->db->delete('cms_posts');
    }
    
    public function update_post($id, $data)
    {
        $this->db->where('post_id',$id);     
        $this->db->update('cms_posts',array(            
            'post_author' => $data['post_author'], 
            'post_date' => $data['post_date'], 
            'post_content' => $data['post_content'], 
            'post_title' => $data['post_title'], 
            'post_status' => $data['post_status'], 
            'post_comment_status' => $data['post_comment_status'], 
            'post_name' => $data['post_name'], 
            'post_modified' => $data['post_modified'], 
            'post_type' => $data['post_type'], 
            'post_comment_count' => $data['post_comment_count'], 
            'post_view_count' => $data['post_view_count'], 
            'post_custom_url' => $data['post_custom_url'],  
        ));       
    }
}
