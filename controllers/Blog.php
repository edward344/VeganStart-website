<?php

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Blog_model");
    }
    
    public function index($start = 0)
    {
        $data = array();
        $data["title"] = "VeganStart | Blog";
        
        if ($this->session->has_userdata("username"))
        {
            $data["username"] = $this->session->userdata("username");
        }
        
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = site_url("blog/index");
        $config["total_rows"] = $this->Blog_model->record_count();
        $config["per_page"] = 3;
        $config["num_links"] = 2;
        // Customize the Pagination:
        $config["full_tag_open"] = '<div class="pagination">';
        $config["full_tag_close"] = '</div>';
        $config['cur_tag_open'] = '<div class="active">';
        $config['cur_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        
        $data["results"] = $this->Blog_model->fetch_posts($config["per_page"],$start);
        $data["links"] = $this->pagination->create_links();
        
        $this->load->view("header",$data);
        $this->load->view("blog",$data);
        $this->load->view("footer");
    }
    
    public function create_post()
    {
        if ($this->session->has_userdata("username"))
        {
            $data = array();
            $data["title"] = "VeganStart | Create Post";
            $data["username"] = $this->session->userdata("username");
            
            $this->load->helper("form");
        
            $this->load->view("header",$data);
            $this->load->view("create_post");
            $this->load->view("footer");
        }
        else
        {
            $this->session->set_flashdata("message","You need to login to create a post...");
            redirect("home/login");
        }
        
    }
    
    public function save_post()
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
            redirect("blog/create_post");
        }
        else
        {
            $input_data = array(
                "username" => $this->session->userdata("username"),
                "title" => $this->input->post("title"),
                "image" => $this->upload->data("file_name"),
                "about" => $this->input->post("about")
            );
            
            $this->Blog_model->insert_post($input_data);
            
            $this->session->set_flashdata("message","Your post was uploaded successfully");
            redirect("blog");
        }
    }
    
    public function detail($id)
    {
        $data = array();
        $data["title"] = "VeganStart | Blog";
        
        if ($this->session->has_userdata("username"))
        {
            $data["username"] = $this->session->userdata("username");
        }
        
        $data["post"] = $this->Blog_model->get_post($id);
        $data["comment_count"] = $this->Blog_model->comments_count($id);
        $data["comments"] = $this->Blog_model->get_comments($id);
        
        $this->load->helper("form");
        
        $this->load->view("header",$data);
        $this->load->view("post_detail",$data);
        $this->load->view("footer");
    }
    
    public function save_comment($post_id)
    {
        if ($this->session->has_userdata("username"))
        {
            $input_data = array(
                "post_id" => $post_id,
                "username" => $this->session->userdata("username"),
                "comment" => $this->input->post("comment")
            );
            
            $this->Blog_model->insert_comment($input_data);
            
            redirect("blog/detail/" . $post_id);
        }
        else
        {
            $this->session->set_flashdata("message","You need to login to write a comment...");
            redirect("home/login");
        }
    }
}

?>