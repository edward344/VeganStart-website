<?php

class Blog_model extends CI_Model
{
    public function insert_post($data)
    {
        $this->db->insert("posts",$data);
    }
    
    public function fetch_posts($limit,$start)
    {
        $this->db->limit($limit,$start);
        $this->db->order_by("id","DESC");
        $query = $this->db->get("posts");
        
        return $query->result();
    }
    
    public function record_count()
    {
        return $this->db->count_all("posts");
    }
    
    public function get_post($id)
    {
        $query = $this->db->get_where("posts",array("id"=>$id));
        
        return $query->row();
    }
    
    public function insert_comment($data)
    {
        $this->db->insert("comments",$data);
    }
    
    public function comments_count($post_id)
    {
        $this->db->where("post_id",$post_id);
        $this->db->from("comments");
        
        return $this->db->count_all_results();
    }
    
    public function get_comments($post_id)
    {
        $this->db->order_by("id","DESC");
        $query = $this->db->get_where("comments",array("post_id"=>$post_id));
        
        return $query->result();
    }
}

?>