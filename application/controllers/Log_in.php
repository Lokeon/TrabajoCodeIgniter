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
                $sess = [
                    'user'   => set_value('username'),
                    'logged' => true,
                    'admin'  => false,
                ];
                $user = set_value('username');
                if (valid_email($user) === true) {
                    $sess['admin']    = $this->log_in_model->is_admin($user, 'email');
                    $sess['userinfo'] = $this->user_model->user_info($user, 'email');
                } else {
                    $sess['admin']    = $this->log_in_model->is_admin($user);
                    $sess['userinfo'] = $this->user_model->user_info($user);
                }

                $this->session->set_userdata($sess);
                if (true === $sess['admin']) {
                    redirect('/admin/articulos');
                } else {
                    redirect('/');
                }
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(['user', 'logged', 'userinfo', 'admin']);
        $this->session->sess_destroy();
        redirect('/');
    }

}
