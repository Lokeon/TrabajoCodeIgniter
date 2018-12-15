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
                    $data = array(
                        'titulo'  => "Correo enviado",
                        'mensaje' => "Se ha registrado correctamente<br>Acceda a su correo electrónico para verificar su cuenta<br><br><a href=\"" . base_url() . "Welcome\">Pulse aquí si no es redireccionado en unos segundos</a>",
                        'url'     => base_url(),
                    );
                } else {
                    $data = array(
                        'titulo'  => "Error en registro",
                        'mensaje' => "Se ha producido un error en el registro<br>Por favor, intentelo de nuevo<br><br><a href=\"" . base_url() . "Welcome\">Pulse aquí si no es redireccionado en unos segundos</a>",
                        'url'     => base_url(),
                    );
                }
                generate_view($this, $data['titulo'], 'end_form_view', $data);
            }
        }
    }

    public function validate_email()
    {
        $email = $this->input->get('email', true);
        $hash  = $this->input->get('hash', true);
        if ($this->sign_up_model->validate_email_hash($email, $hash)) {
            $data = array(
                'titulo'  => "Email confirmado",
                'mensaje' => "Su cuenta se ha verificado correctamente<br><br><a href=" . base_url('Log_in') . ">Pulse aquí si no es redireccionado en unos segundos</a>",
                'url'     => base_url('Log_in'),
            );
        } else {
            $data = array(
                'titulo'  => "Error confirmación",
                'mensaje' => "Su correo electrónico ya ha sido confirmado o el enlace no es valido<br><br><a href=" . base_url('Log_in') . ">Pulse aquí si no es redireccionado en unos segundos</a>",
                'url'     => base_url('Log_in'),
            );
        }
        generate_view($this, $data['titulo'], 'end_form_view', $data);
    }
}
