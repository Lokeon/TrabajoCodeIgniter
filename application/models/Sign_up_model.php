<?php
class Sign_up_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function create_new_user()
    {
        $username = $this->input->post('username', true);
        $email = $this->input->post('email', true);
        $pass = password_hash($this->input->post('pass', true), PASSWORD_BCRYPT, array('cost' => 11));
        $this->db->insert(
            'users',
            array(
                'username' => $username,
                'email' => $email,
                'pass' => $pass,
            )
        );
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}
