<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_users()
    {
        $consulta = $this->db->query("SELECT * FROM users ORDER BY username ASC");
        return $consulta->result_array();
    }

    public function getUsers()
    {
        $consulta = $this->db->query("SELECT * FROM users WHERE type = 0 ORDER BY username ASC");
        return $consulta->result_array();
    }

    public function updatePassword($id, $pass)
    {
        $this->db->query("UPDATE users SET pass='$pass' WHERE id=$id");
        return $this->db->affected_rows();
    }

    public function getComments($user)
    {
        $comments = $this->db->query("SELECT username, comment,comments.created,stars,name,id_article FROM comments, users, articles WHERE id_user=$user AND users.id=id_user AND articles.id=id_article ORDER BY comments.created DESC");
        return ['comments' => $comments->result_array()];
    }

    public function user_info($user, $by = "username")
    {
        $consulta = $this->db->query("SELECT id,username,created,email FROM users WHERE $by='$user'");
        return $consulta->result_array();
    }

    public function removeUser($id)
    {
        $this->db->delete('comments', ['id_user' => $id]);
        $this->db->delete('users', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function modifyUser($id)
    {
        $this->db->query("UPDATE users SET type = 1 WHERE id = $id");
        return $this->db->affected_rows();
    }

    public function updateUser($id, $user)
    {
        $this->db->query("UPDATE users SET username='$user' WHERE id=$id");
        return $this->db->affected_rows();
    }

}
