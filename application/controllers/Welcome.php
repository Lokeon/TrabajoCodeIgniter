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
            $fin    = $page * $this->pagination->per_page;
            $inicio = $fin - $this->pagination->per_page + 1;
        } else {
            $inicio = 1;
            $fin    = $this->pagination->per_page;
        }
        if ($data["results"] = $this->articles_model->getArticles($inicio, $fin)) {
            $data["links"]  = $this->pagination->create_links();
            $data["logged"] = $this->session->has_userdata('logged') == true;
            generate_view($this, 'Review', 'articles/welcome_view', $data);
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
