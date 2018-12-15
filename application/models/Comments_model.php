<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Comments_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getComment($id)
    {
        $comment = $this->db->query("SELECT * FROM comments WHERE id_article=$id");
        return $comment->result_array();
    }

    public function deleteComment($id)
    {
        $this->db->delete('comments', ['id' => $id]);
    }
}
