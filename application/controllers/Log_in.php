<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Log_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        generate_view($this, 'Log in', 'log_in_view');
    }

    public function is_valid_user($pass, $user)
    {
        $user = $this->input->post($user);
        if (valid_email($user) === true) {
            return $this->log_in_model->is_valid_pass_by('email', $user, $pass);
        } elseif ($this->form_validation->is_unique($user, "users.username") === false) {
            return $this->log_in_model->is_valid_pass_by('username', $user, $pass);
        } else {
            return false;
        }
    }

    public function is_confirmed($user)
    {
        $return = true;
        if (valid_email($user) === true && !$this->form_validation->is_unique($user, "users.email")) {
            $return = $this->log_in_model->is_confirmed_by('email', $user);
        } elseif (!$this->form_validation->is_unique($user, "users.username")) {

            $return = $this->log_in_model->is_confirmed_by('username', $user);
        }
        return $return;
    }

    public function verify_log_in()
    {
        if ($this->input->post('submit')) {
            if ($this->form_validation->run() === false) {
                generate_view($this, 'Log in', 'log_in_view');
            } else {
                $this->session->set_userdata(
                    array(
                        'user' => set_value('username'),
                        'logged' => true,
                    )
                );
                // TODO cambiar a welcome logged
                generate_view($this, 'Log in', 'log_out_view');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(array('user', 'logged'));
        $this->session->sess_destroy();
        // TODO cambiar a welcome
        generate_view($this, 'Log in', 'log_in_view');
    }

}
