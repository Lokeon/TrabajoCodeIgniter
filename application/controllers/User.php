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
        $data = $this->session->userdata('userinfo')[0];
        generate_view($this, "Perfil", "/user/perfil_view", $data);
    }

    public function comments()
    {
        $data           = $this->user_model->getComments($this->session->userdata('userinfo')[0]['id']);
        $foot['scores'] = implode(',', array_column($data["comments"], 'stars'));
        generate_view($this, "Reviews", "/user/myreviews", $data, $foot);
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
                $response = $this->user_model->updatePassword(
                    $args[0],
                    password_hash($args[1], PASSWORD_BCRYPT, ['cost' => 11])
                );
                break;
        }
        print(json_encode($response));
        http_response_code(200);
    }
    public function changeUser()
    {
        $args = $this->input->post('args');
        header('Content-Type: application/json');
        switch ($this->input->post('function')) {
            case 'unique':
                $response = $this->form_validation->is_unique($args[0], "users.username");
                break;
            case 'update':
                {
                    $response                            = $this->user_model->updateUser($args[0], $args[1]);
                    $_SESSION['userinfo'][0]['username'] = $args[1];
                }
                break;
        }
        print(json_encode($response));
        http_response_code(200);
    }

}
