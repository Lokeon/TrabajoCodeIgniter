<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Log_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('head');
        $this->load->view('navbar');
        $this->load->view('log_in_view');
        $this->load->view('footer');
    }

}
