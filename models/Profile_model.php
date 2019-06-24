<?php

class Profile_model extends CI_Model
{
    public function insert_user_profile($data)
    {
        $this->db->insert("profile",$data);
    }
    
    public function fetch_profile($username)
    {
        $query = $this->db->get_where("profile",array("username"=>$username));
        
        return $query->row();
    }
    
    public function update_profile($username,$data)
    {
        $this->db->where("username",$username);
        $this->db->update("profile",$data);
    }
    
    public function update_photo($username,$file_name)
    {
        $data = array("image" => $file_name);
        $this->db->where("username",$username);
        $this->db->update("profile",$data);
    }
    
    public function get_image_name($username)
    {
        $this->db->select("image");
        $query = $this->db->get_where("profile",array("username"=>$username));
        $row = $query->row();
        
        return $row->image;
    }
}

?>