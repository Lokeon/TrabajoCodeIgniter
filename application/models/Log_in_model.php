<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Log_in_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function is_valid_pass_by($by, $str, $pass)
    {
        $query    = "SELECT pass FROM users WHERE $by='$str'";
        $consulta = $this->db->query($query);
        return password_verify($pass, $consulta->row()->pass);
    }

    public function is_confirmed_by($by, $str)
    {
        $query = "SELECT id FROM users WHERE $by='$str' AND confirmed=1";
        return $this->db->query($query)->num_rows() == 1;
    }

    public function is_admin($user, $by = 'username')
    {
        $query = "SELECT id FROM users WHERE $by='$user' AND type=1";
        return $this->db->query($query)->num_rows() == 1;
    }
}
