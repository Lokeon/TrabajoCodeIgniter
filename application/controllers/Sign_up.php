<?php
class Sign_up extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function sign_up()
    {
        $this->load->view('sign_up_view');
    }

    public function verify_sign_up()
    {
        if ($this->input->post('submit_reg')) {
            $this->form_validation->set_rules('username', 'Username', 'required|trim|callback_verify_user');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|callback_verify_email');
            $this->form_validation->set_rules('email2', 'Confirm email', 'required|valid_email|trim|matches[email]');
            $this->form_validation->set_rules('pass', 'Password', 'required|trim');
            $this->form_validation->set_rules('pass2', 'Confirm password', 'required|trim|matches[pass]');
            $this->form_validation->set_message('required', 'El campo %s es obligatorio.');
            $this->form_validation->set_message('valid_email', 'El campo %s es invalido.');
            $this->form_validation->set_message('verify_user', 'El %s ya existe.');
            $this->form_validation->set_message('verify_email', 'El %s ya existe.');
            $this->form_validation->set_message('matches', 'El campo %s no es igual que el campo %s.');

            if ($this->form_validation->run() == false) {
                $this->sign_up();
            } else {
                $this->sign_up_model->sign_up_user();
                $datos = array('mensaje' => 'El usuario se ha registrado correctamente.');
                $this->load->view('registro_view', $datos);
            }
        }
    }

    function verify_user($user)
    {
        return !($this->sign_up_model->verify_user($user));
    }

    function verify_email($email)
    {
        return !($this->sign_up_model->verify_email($email));
    }
}
