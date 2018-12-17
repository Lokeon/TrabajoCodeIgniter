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
        generate_view($this, "Perfil", "/user/perfil_view");
    }

    public function comments()
    {
        generate_view($this, "Reviews", "/user/comments_view,", $data);
    }
    
    /*
    public function getId()
    {
        return $this->user_model
    }*/
}