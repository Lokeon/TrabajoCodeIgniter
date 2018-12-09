<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $settings               = $this->config->item('pagination');
        $settings['total_rows'] = $this->articles_model->countArticles();
        $this->pagination->initialize($settings);
    }

    public function index()
    {
        if ($page = $this->uri->segment(3)) {
            $offset = ($page - 1) * $this->pagination->per_page;
        } else {
            $offset = 0;
        }
        if ($data["results"] = $this->articles_model->getArticlesArray($offset, $this->pagination->per_page)) {
            $data["logged"] = $this->session->has_userdata('logged') == true;
            $data["links"]  = $this->pagination->create_links();
            $foot["scores"] = implode(',', array_column($data["results"], 'average'));
            generate_view($this, 'Review', 'articles/welcome_view', $data, $foot);
        } else {
            redirect('/');
        }
    }

    public function signup()
    {
        redirect("/Sign_up");
    }

    public function login()
    {
        redirect("/Log_in");
    }
}
