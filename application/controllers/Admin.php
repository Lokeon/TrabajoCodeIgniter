<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['options'] = $this->config->item($this->uri->segment(2));
        generate_view($this, "Dashboard", "admin/admin_view", $data);
    }

    public function articulos($alfo)
    {
        $data['options'] = $this->config->item('articulos');
        generate_view($this, "Dashboard", "admin/admin_view", $data);
    }

    public function comentarios($algo)
    {
        $data['options'] = $this->config->item('comentarios');
        generate_view($this, "Dashboard", "admin/admin_view", $data);
    }

    public function usuarios($algo)
    {
        $data['options'] = $this->config->item('usuarios');
        generate_view($this, "Dashboard", "admin/admin_view", $data);
    }
}
