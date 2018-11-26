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
        $this->load->view('head');
        $this->load->view('navbar');
        //$this->load->view('Welcome_view');
        $this->load->view('footer');
    }

    public function where_to_go()
    {
        if ($this->input->post('login')) {
            redirect('/Log_in');
        } elseif ($this->input->post('signup')) {
            redirect('/Sign_up');
            $this->load->view('head');
            $this->load->view('navbar');
            $this->load->view('sign_up_view');
            $this->load->view('footer');
        }
    }
}