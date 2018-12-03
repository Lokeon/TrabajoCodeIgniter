<?php
<<<<<<< HEAD
defined('BASEPATH') or exit('No direct script access allowed');
=======
>>>>>>> 9ee558fbfc63f57c5715de802f6cf8f5d5201faf
class Articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
<<<<<<< HEAD

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
=======
}
>>>>>>> 9ee558fbfc63f57c5715de802f6cf8f5d5201faf
