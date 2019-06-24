<?php

class Home_model extends CI_Model
{
    public function fetch_user($username)
    {
        $query = $this->db->get_where("users",array("username"=>$username));
        
        return $query->row();
    }
    
    public function insert_user($data)
    {
        $this->db->insert("users",$data);
    }
}

?>