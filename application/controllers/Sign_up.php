<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sign_up extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
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
                if ($this->sign_up_model->create_new_user()) {
                    echo "registrado y email enviado";
                } else {
                    echo "no registrado y/o email no enviado";
                }
                //generate_view() PARA LA VISTA CUANDO SE REGISTRE EL COLEGA
            }
        }
    }

    public function validate_email()
    {
        $email = $this->input->get('email', true);
        $hash = $this->input->get('hash', true);
        if ($this->sign_up_model->validate_email_hash($email, $hash)) {
            //view confirmacion de email
            echo "email confirmado";
        } else {
            //view denegacion url
            echo "email ya confirmado o url no valida";
        }
    }
}
