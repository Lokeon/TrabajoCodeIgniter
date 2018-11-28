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
        $data['title'] = 'Review';
        $this->load->view('head', $data);
        $this->load->view('navbar');
        $data = array(
            'image' => 'https://www.worten.es/i/874d4551cfb27c6babccac37194cddafd7c13af7.jpg',
            'nombreproducto' => 'Prueba',
            'media' => 5,
            'linkarticulo' => 'url',
        );
        $this->output->append_output("<div class='container-fluid'><div class='row'>");
        $this->parser->parse('article_card_view', $data);
        $data = array(
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/71NFAGn-FuL._SY550_.jpg',
            'nombreproducto' => 'Prueba',
            'media' => 5,
            'linkarticulo' => 'url',
        );
        $this->parser->parse('article_card_view', $data);
        $data = array(
            'image' => 'https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fdavidphelan%2Ffiles%2F2018%2F10%2FiPad-Pro_next-gen_10302018-1200x998.jpg',
            'nombreproducto' => 'Prueba',
            'media' => 5,
            'linkarticulo' => 'url',
        );
        $this->parser->parse('article_card_view', $data);
        $this->parser->parse('article_card_view', $data);
        $this->output->append_output("</div></div>");
        $this->load->view('footer');
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
