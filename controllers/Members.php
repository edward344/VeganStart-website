<?php

class Members extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Member_model");
    }
    
    public function index($start = 0)
    {
        $data = array();
        $data["title"] = "VeganStart | Members";
        
        if ($this->session->has_userdata("username"))
        {
            $data["username"] = $this->session->userdata("username");
        }
        
        
        $data["total_users"] = $this->Member_model->record_count();
        
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = site_url("members/index");
        $config["total_rows"] = $data["total_users"];
        $config["per_page"] = 3;
        $config["num_links"] = 2;
        // Customize the Pagination:
        $config["full_tag_open"] = '<div class="pagination">';
        $config["full_tag_close"] = '</div>';
        $config['cur_tag_open'] = '<div class="active">';
        $config['cur_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        
        $data["results"] = $this->Member_model->fetch_users($config["per_page"],$start);
        $data["links"] = $this->pagination->create_links();
        
        
        $this->load->view("header",$data);
        $this->load->view("members",$data);
        $this->load->view("footer");
    }
    
    public function detail($id)
    {
        $data = array();
        $data["title"] = "VeganStart | Members";
        
        if ($this->session->has_userdata("username"))
        {
            $data["username"] = $this->session->userdata("username");
        }
        
        $data["profile"] = $this->Member_model->fetch_profile($id);
        
        $this->load->view("header",$data);
        $this->load->view("profile_detail",$data);
        $this->load->view("footer");
    }
}

?>