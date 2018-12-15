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
        if ($this->session->userdata('logged') && $this->session->userdata('admin')) {
            $data['function'] = function () {
                print(innercard($this, $this->config->item($this->uri->segment(2))));
            };
            generate_view($this, "Dashboard", "admin/admin_view", $data);
        } else {
            redirect('/');
        }
    }

    public function articulos($option)
    {
        if ($this->session->userdata('logged') && $this->session->userdata('admin')) {
            switch ($option) {
                case 'insertar':
                    if ($this->form_validation->run('admin/articulos/insertar') === false) {
                        $data['function'] = function () {
                            $select['brand'] = $this->brands_model->get_brands();
                            $select['tags'] = $this->category_model->get_categories();
                            print($this->parser->parse('admin/articulos/insertar_view', $select, true));
                        };
                    } else {
                        $formdata = [
                            'id_brand' => $this->input->post('Marca'),
                            'id_category' => $this->input->post('Categoria'),
                            'name' => $this->input->post('name'),
                            'description' => $this->input->post('description'),
                            'image' => $this->input->post('image'),
                            'store' => $this->input->post('store'),
                        ];
                        $this->articles_model->insertArticle($formdata);
                        redirect('admin/articulos');
                    }
                    break;
                case 'eliminar':
                    $data['function'] = function () {
                        print($this->parser->parse('admin/articulos/eliminar_view', [], true));
                    };
                    break;
                case 'modificar':
                    if ($this->form_validation->run('admin/articulos/modificar') === false) {
                        $data['function'] = function () {
                            $select['brand'] = $this->brands_model->get_brands();
                            $select['tags'] = $this->category_model->get_categories();
                            $select['articles'] = $this->articles_model->get_article();
                            print($this->parser->parse('admin/articulos/modificar_view', $select, true));
                        };
                    } else {
                        $formdata = array_filter([
                            'id_brand' => $this->input->post('Marca'),
                            'id_category' => $this->input->post('Categoria'),
                            'name' => $this->input->post('name'),
                            'description' => $this->input->post('description'),
                            'image' => $this->input->post('image'),
                            'store' => $this->input->post('store'),
                        ]);
                        $this->articles_model->updateArticle($this->input->post('Articulo'), $formdata);
                        redirect('admin/articulos');
                    }
                    break;
                case 'insertbrand':
                    if ($this->form_validation->run('admin/articulos/insertbrand') === false) {
                        $data['function'] = function () {
                            print($this->parser->parse('admin/articulos/insert_brand_view', [], true));
                        };
                    } else {
                        $this->brands_model->insertBrands($this->input->post('name'));
                        redirect('admin/articulos');
                    }
                    break;
                case 'deletebrand':
                    $data['function'] = function () {
                        print($this->parser->parse('admin/articulos/delete_brand_view', [], true));
                    };
                    break;
                case 'insertcategory':
                    if ($this->form_validation->run('admin/articulos/insertcategory') === false) {
                        $data['function'] = function () {
                            print($this->parser->parse('admin/articulos/insert_category_view', [], true));
                        };
                    } else {
                        $formdata = array_filter([
                            'name' => $this->input->post('name'),
                        ]);
                        $this->category_model->insertCategory($formdata);
                        redirect('admin/articulos');
                    }
                    break;
                case 'deletecategory':
                    $data['function'] = function () {
                        print($this->parser->parse('admin/articulos/delete_category_view', [], true));
                    };
                    break;
            }
            generate_view($this, "Dashboard", "admin/admin_view", $data);
        } else {
            redirect('/');
        }
    }

    public function comentarios($option)
    {
        if ($this->session->userdata('logged') && $this->session->userdata('admin')) {
            switch ($option) {

                case 'eliminar':
                    $data['function'] = function () {
                        $select['articles'] = $this->articles_model->get_article();
                        print($this->parser->parse('admin/comentarios/delete_view', $select, true));
                    };
                    break;
            }
            generate_view($this, "Dashboard", "admin/admin_view", $data);

        } else {
            redirect('/');
        }
    }

    public function usuarios($option)
    {
        switch ($option) {
            case 'eliminar':
                $data['function'] = function () {
                    print($this->parser->parse('admin/usuarios/delete_view', [], true));
                };
                break;
            case 'modificar':
                $data['function'] = function () {
                    print($this->parser->parse('admin/usuarios/modify_view', [], true));
                };
                break;
        }
        generate_view($this, "Dashboard", "admin/admin_view", $data);
    }

    public function comentariosArticulo()
    {
        header('Content-Type: application/json');
        $id = $this->input->post('id');
        print(json_encode($this->comments_model->getComment($id)));
    }

    public function elminarComentariosArticulos()
    {
        header('Content-Type: application/json');
        $id = $this->input->post('id');
        $this->comments_model->deleteComment($id);
        http_response_code(200);
    }

    public function listArticles()
    {
        header('Content-Type: application/json');
        print(json_encode($this->articles_model->get_article()));
    }

    public function removeArticle()
    {
        header('Content-Type: application/json');
        $id = $this->input->post('id');
        print(json_encode($this->articles_model->removeArticle($id)));
        http_response_code(200);
    }

    public function listBrands()
    {
        header('Content-Type: application/json');
        print(json_encode($this->brands_model->get_brands()));
    }

    public function removeBrand()
    {
        header('Content-Type: application/json');
        $id = $this->input->post('id');
        print(json_encode($this->brands_model->removeBrand($id)));
        http_response_code(200);
    }

    public function listCategory()
    {
        header('Content-Type: application/json');
        print(json_encode($this->category_model->get_categories()));
    }

    public function removeCategory()
    {
        header('Content-Type: application/json');
        $id = $this->input->post('id');
        print(json_encode($this->category_model->removeCategory($id)));
        http_response_code(200);
    }

}
