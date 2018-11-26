<?php
class Log_in_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function is_user_valid($user)
    {
        $query = "SELECT username FROM users WHERE username=$user";
        $consulta = $this->db->query($query);
        return ($consulta->num_rows() == 0) ? false : true;
    }

    public function is_email_valid($email)
    {
        $query = "SELECT email FROM users WHERE email=$email";
        $consulta = $this->db->query($query);
        return ($consulta->num_rows() == 0) ? false : true;
    }

    public function is_pass_valid($user, $pass)
    {
        $query = "SELECT pass FROM users WHERE username=$user";
        $consulta = $this->db->query($query);
        return password_verify($pass, $consulta->result('pass'));
    }
}
