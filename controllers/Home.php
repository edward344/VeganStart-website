<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Home_model");
    }
    
    public function index()
    {
        $data = array();
        $data["title"] = "VeganStart";
        
        if ($this->session->has_userdata("username"))
        {
            $data["username"] = $this->session->userdata("username");
        }
        
        $this->load->view("header",$data);
        $this->load->view("home",$data);
        $this->load->view("footer");
    }
    
    public function login()
    {
        $this->load->helper("form");
        $this->load->view("login");
    }
    
    public function check_username()
    {   
        $row = $this->Home_model->fetch_user($this->input->post("username"));

        if (isset($row))
        {
            if ($row->password == $this->input->post("password"))
            {
                $this->session->set_userdata("username",$row->username);
                redirect("home/index");
            }
            else
            {
                $this->session->set_flashdata("message","You entered the wrong password...");
                redirect("home/login");
            }
        }
        else
        {
            $this->session->set_flashdata("message","The user that you entered does not exist...");
            redirect("home/login");
        }
    }
    
    public function sign_out()
    {
        $this->session->sess_destroy();
        redirect("home/index");
    }
    
    public function sign_up()
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("username","Username","required");
        $this->form_validation->set_rules("email","Email","required|valid_email");
        $this->form_validation->set_rules("password","Password","required");
        
        $this->load->helper("form");
        
        if ($this->form_validation->run() == true)
        {
            $data = array(
                "username" => $this->input->post("username"),
                "email" => $this->input->post("email"),
                "password" => $this->input->post("password")
            );
            
            $this->Home_model->insert_user($data);
            $this->session->set_userdata("username",$this->input->post("username"));
            redirect("home/index");
        }
        else
        {
            $this->load->view("sign_up");
        }
        
    }
    
    public function about_us()
    {
        $data = array();
        $data["title"] = "VeganStart | About Us";
        
        if ($this->session->has_userdata("username"))
        {
            $data["username"] = $this->session->userdata("username");
        }
        
        $this->load->view("header",$data);
        $this->load->view("about_us");
        $this->load->view("footer");
    }
    
    public function vegan_start()
    {
        $data = array();
        $data["title"] = "VeganStart | Your Vegan Start";
        
        if ($this->session->has_userdata("username"))
        {
            $data["username"] = $this->session->userdata("username");
        }
        
        $this->load->view("header",$data);
        $this->load->view("vegan_start");
        $this->load->view("footer");
    }
    
    public function why_go_vegan()
    {
        $data = array();
        $data["title"] = "VeganStart | Why Go Vegan";
        
        if ($this->session->has_userdata("username"))
        {
            $data["username"] = $this->session->userdata("username");
        }
        
        $this->load->view("header",$data);
        $this->load->view("why_go_vegan");
        $this->load->view("footer");
    }
    
    public function veganize_breakfast()
    {
        $data = array();
        $data["title"] = "VeganStart | How to Veganize Your Breakfast";
        
        if ($this->session->has_userdata("username"))
        {
            $data["username"] = $this->session->userdata("username");
        }
        
        $this->load->view("header",$data);
        $this->load->view("veganize_breakfast");
        $this->load->view("footer");
    }
    
    public function faq()
    {
        $data = array();
        $data["title"] = "VeganStart | FAQ";
        
        if ($this->session->has_userdata("username"))
        {
            $data["username"] = $this->session->userdata("username");
        }
        
        $this->load->view("header",$data);
        $this->load->view("faq");
        $this->load->view("footer");
    }
    
}

?>