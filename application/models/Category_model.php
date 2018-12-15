<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category_model extends CI_Model
{
    public function construct()
    {
        parent::_construct();
    }
   
    public function get_categories()
    {
        $consulta = $this->db->query('SELECT * FROM category ORDER BY name ASC');
        return $consulta->result_array();
    }

    public function insertCategory($data)
    {
        $this->db->insert("category",$data);
    }

    public function removeCategory($id)
    {
        $this->db->query("UPDATE articles SET id_category = 9 WHERE id_category = $id");
        $this->db->delete('category', ['id' => $id]);
        return $this->db->affected_rows();
    }
}
