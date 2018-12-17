<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function profile()
    {
        $data = array_merge($this->session->userdata('userinfo')[0], $this->user_model->getComments($this->session->userdata('userinfo')[0]["username"]));
        generate_view($this, "Perfil", "/user/perfil_view", $data);
    }

    public function comments()
    {
        generate_view($this, "Reviews", "/user/comments_view");
    }

    public function changePassword()
    {
        $args = $this->input->post('args');
        header('Content-Type: application/json');
        switch ($this->input->post('function')) {
            case 'check':
                $response = $this->log_in_model->is_valid_pass_by('id', $args[0], $args[1]);
                break;
            case 'update':
                // $response = $this->user_model->updatePassword(
                //     $args[0],
                //     password_hash($args[1], PASSWORD_BCRYPT, array('cost' => 11))
                // );
                $response = [$args[0], password_hash($args[1], PASSWORD_BCRYPT, array('cost' => 11))];
                break;
        }
        print(json_encode($response));
        http_response_code(200);
    }

}