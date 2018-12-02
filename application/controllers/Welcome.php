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
        $settings = $this->config->item('pagination');
        $settings['total_rows'] = $this->articles_model->countArticles();
        $this->pagination->initialize($settings);
    }

    public function index()
    {
        if ($page = (int)$this->input->get('per_page', true)) {
            $fin = $page * $this->pagination->per_page;
            $inicio = $fin - $this->pagination->per_page + 1;
        } else {
            $inicio = 1;
            $fin = $this->pagination->per_page;
        }
        $data["results"] = $this->articles_model->getArticles($inicio, $fin);
        $data["links"] = $this->pagination->create_links();
        generate_view($this, 'Review', 'articles/welcome_view', $data);
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
