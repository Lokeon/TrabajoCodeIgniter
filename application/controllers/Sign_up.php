<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sign_up extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        generate_view($this, 'Sign Up', 'sign_up_view');
    }

    public function verify_sign_up()
    {
        if ($this->input->post('submit')) {
            if ($this->form_validation->run() === false) {
                generate_view($this, 'Sign Up', 'sign_up_view');
            } else {
                $this->sign_up_model->create_new_user();
                //$datos = array('mensaje' => 'El usuario se ha registrado correctamente.');
                //$this->load->view('registro_view', $datos);
                echo "exito";
            }
        }
    }
}
