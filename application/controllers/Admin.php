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
        $data['function'] = function () {
            print(innercard($this, $this->config->item($this->uri->segment(2))));
        };
        generate_view($this, "Dashboard", "admin/admin_view", $data);
    }

    public function articulos($option)
    {
        switch ($option) {
            case 'insertar':
                $data['function'] = function () {
                    $select['brand'] = $this->brands_model->get_brands();
                    $select['tags']  = $this->category_model->get_categories();
                    print($this->parser->parse('admin/articulos/insertar_view', $select, true));
                };
                break;
            case 'eliminar':
                $data['function'] = function () {
                    print($this->parser->parse('admin/articulos/insertar_view', [], true));
                };
                break;
            case 'modificar':
                $data['function'] = function () {
                    print($this->parser->parse('admin/articulos/insertar_view', [], true));
                };
                break;
        }
        generate_view($this, "Dashboard", "admin/admin_view", $data);
    }

    public function comentarios($algo)
    {

    }

    public function usuarios($algo)
    {

    }
}
