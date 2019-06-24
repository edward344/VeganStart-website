<?php

class Member_model extends CI_Model
{
    public function fetch_users($limit,$start)
    {
        $this->db->select("id,image,name,country,city");
        $this->db->limit($limit,$start);
        $query = $this->db->get("profile");
        
        return $query->result();
    }
    
    public function record_count()
    {
        return $this->db->count_all("profile");
    }
    
    public function fetch_profile($id)
    {
        $this->db->select("image,email,name,gender,country,city,about");
        $query = $this->db->get_where("profile",array("id"=>$id));
        
        return $query->row();
    }
    
}

?>