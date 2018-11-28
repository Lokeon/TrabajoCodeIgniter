<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Card';

        $this->load->view('head', $data);
        $this->load->view('navbar');
        for ($i = 0; $i < 2; ++$i)
            $this->load->view('article_card_view');
        $this->load->view('footer');
        
    }
}