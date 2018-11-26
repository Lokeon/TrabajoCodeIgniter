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
        $this->load->view('sign_up_view');
    }

 /*   public function sign_up()
    {
        $this->load->view('sign_up_view');
    }*/

    public function verify_sign_up()
    {
        if ($this->input->post('submit_reg')) {
            
            if ($this->form_validation->run() == false) {
                $this->sign_up();
            } else {
                $this->sign_up_model->sign_up_user();
                $datos = array('mensaje' => 'El usuario se ha registrado correctamente.');
                $this->load->view('registro_view', $datos);
            }
        }
    }

    public function verify_user($user)
    {
        return !($this->sign_up_model->verify_user($user));
    }

    public function verify_email($email)
    {
        return !($this->sign_up_model->verify_email($email));
    }
}
