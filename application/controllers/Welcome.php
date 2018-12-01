<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->uri->segment(3)) {
            $page = $this->uri->segment(3);
        } else {
            $page = 1;
        }
        $data["results"] = $this->pagination_model->fetch_data($page, $config["per_page"]);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);
        generate_view($this, 'Review', 'welcome_view', $data);
    }

    public function signup()
    {
        redirect("/Sign_up");
    }

    public function login()
    {
        redirect("/Log_in");
    }

    public function articles()
    {
        if ($this->uri->segment(3)) {
            $page = $this->uri->segment(3);
        } else {
            $page = 1;
        }
        $data["results"] = $this->pagination_model->fetch_data($page, $config["per_page"]);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);
    }

}
