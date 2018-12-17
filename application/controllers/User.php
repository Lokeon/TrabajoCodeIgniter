<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function profile()
    {
        $data = array_merge($this->session->userdata('userinfo')[0], $this->user_model->getComments($this->session->userdata('userinfo')[0]["username"]));
        generate_view($this, "Perfil", "/user/perfil_view", $data);
    }

    public function comments()
    {
        generate_view($this, "Reviews", "/user/comments_view");
    }

    public function checkPassword()
    {

    }

}