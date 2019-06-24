<?php

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Profile_model");
    }
    
    public function index()
    {
        if ($this->session->has_userdata("username"))
        {
            $data = array();
            $data["title"] = "VeganStart | Profile";
            $data["username"] = $this->session->userdata("username");
            $data["profile"] = $this->Profile_model->fetch_profile($data["username"]);
            
            if (isset($data["profile"]))
            {
                $this->load->view("header",$data);
                $this->load->view("profile",$data);
                $this->load->view("footer");
            }
            else
            {
                $this->session->set_flashdata("message","You need to create your profile...");
                redirect("profile/create_profile");
            }
        }
        
        else
        {
            $this->session->set_flashdata("message","You need to login to see your profile...");
            redirect("home/login");
        }
        
    }
    
    public function create_profile()
    {
        $data = array();
        $data["title"] = "VeganStart | Create Profile";
        $data["error"] = "";
        
        if ($this->session->has_userdata("username"))
        {   
            $data["username"] = $this->session->userdata("username");
        
            $this->load->helper("form");
                
            $this->load->library("form_validation");
            $this->form_validation->set_rules("email","Email","required|valid_email");
            $this->form_validation->set_rules("name","Name","required");
            $this->form_validation->set_rules("city","City","required");
            $this->form_validation->set_rules("about","About","required");
            
            if ($this->form_validation->run() == true)
            {
                $config = array();
                $config["upload_path"] = APPPATH . "../uploads";
                $config["allowed_types"] = "gif|jpg|png|jpeg";
                $config["encrypt_name"] = true;
                $config["max_size"] = 1000;
                
                $this->load->library("upload",$config);
                
                if (!$this->upload->do_upload("image"))
                {
                    
                    $data["error"] = $this->upload->display_errors('<p class="w3-text-red">','</p>');
                    
                    $this->load->view("header",$data);
                    $this->load->view("create_profile",$data);
                    $this->load->view("footer");
                    
                    
                }
                else
                {
                    $input_data = array(
                        "username" => $this->session->userdata("username"),
                        "image" => $this->upload->data("file_name"),
                        "email" => $this->input->post("email"),
                        "name" => $this->input->post("name"),
                        "gender" => $this->input->post("gender"),
                        "country" => $this->input->post("country"),
                        "city" => $this->input->post("city"),
                        "about" => $this->input->post("about")
                    );
                    
                    $this->Profile_model->insert_user_profile($input_data);
                    $this->session->set_flashdata("message","Your profile was created successfully...");
                    redirect("profile");
                }
            }
            else
            {   
                $this->load->view("header",$data);
                $this->load->view("create_profile",$data);
                $this->load->view("footer");
            }
        }
        else
        {
            $this->session->set_flashdata("message","You need to login to create your profile...");
            redirect("profile");
        }
    }
    
    public function edit_info()
    {
        if ($this->session->has_userdata("username"))
        {
            $this->load->library("form_validation");
            $this->form_validation->set_rules("email","Email","required|valid_email");
            $this->form_validation->set_rules("name","Name","required");
            $this->form_validation->set_rules("city","City","required");
            $this->form_validation->set_rules("about","About","required");
            
            if ($this->form_validation->run() == true)
            {
                $input_data = array(
                    "email" => $this->input->post("email"),
                    "name" => $this->input->post("name"),
                    "gender" => $this->input->post("gender"),
                    "country" => $this->input->post("country"),
                    "city" => $this->input->post("city"),
                    "about" => $this->input->post("about")
                );
                
                $this->Profile_model->update_profile($this->session->userdata("username"),$input_data);
                $this->session->set_flashdata("message","Your profile was updated successfully...");
                redirect("profile");
            }
            else
            {
                $data = array();
                $data["title"] = "VeganStart | Edit Profile";
                $data["username"] = $this->session->userdata("username");
                
                $this->load->helper("form");
                
                $data["profile"] = $this->Profile_model->fetch_profile($data["username"]);
                
                if (isset($data["profile"]))
                {
                    $this->load->view("header",$data);
                    $this->load->view("edit_info",$data);
                    $this->load->view("footer");
                }
                else
                {
                    $this->session->set_flashdata("message","You need to create your profile...");
                    redirect("profile/create_profile");
                }
            }
        }
        else
        {
            $this->session->set_flashdata("message","You need to login to edit your profile...");
            redirect("home/login");
        }
    }
    
    public function change_photo()
    {
        if ($this->session->has_userdata("username"))
        {
            $data = array();
            $data["title"] = "VeganStart | Change Profile Photo";
            $data["username"] = $this->session->userdata("username");
            
            $this->load->helper("form");
            
            $this->load->view("header",$data);
            $this->load->view("change_photo");
            $this->load->view("footer");
        }
        else
        {
            $this->session->set_flashdata("message","You need to login to change your profile photo...");
            redirect("home/login");
        }
    }
    
    public function save_image()
    {
        if ($this->session->has_userdata("username"))
        {
            $config = array();
            $config["upload_path"] = APPPATH . "../uploads";
            $config["allowed_types"] = "gif|jpg|png|jpeg";
            $config["encrypt_name"] = true;
            $config["max_size"] = 1000;
                    
            $this->load->library("upload",$config);
            
            if (!$this->upload->do_upload("image"))
            {
                $this->session->set_flashdata("message",$this->upload->display_errors());
                redirect("profile/change_photo");
            }
            else
            {
                $username = $this->session->userdata("username");
                $new_file = $this->upload->data("file_name");
                $previous_file = APPPATH . "../uploads/" . $this->Profile_model->get_image_name($username);
                
                $this->Profile_model->update_photo($username,$new_file);
                // Delete previous image
                if (!unlink($previous_file))
                {
                    $this->session->set_flashdata("message","Error Deleting File...");
                    redirect("profile/change_photo");
                }
                else
                {
                    $this->session->set_flashdata("message","Your Profile Photo was updated successfully...");
                    redirect("profile");
                }

            }
        }
        else
        {
            $this->session->set_flashdata("message","You need to login to change your profile photo...");
            redirect("home/login");
        }
    }
}

?>