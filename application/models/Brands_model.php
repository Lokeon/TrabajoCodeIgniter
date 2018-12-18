<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Brands_model extends CI_Model
{
    public function construct()
    {
        parent::_construct();
    }

    public function get_brands()
    {
        $consulta = $this->db->query('SELECT * FROM brands ORDER BY name ASC');
        return $consulta->result_array();
    }

    public function insertBrands($data)
    {
        $this->db->insert('brands', $data);
    }

    public function removeBrand($id)
    {
        $this->db->delete('articles', ['id_brand' => $id]);
        $this->db->delete('brands', ['id' => $id]);
        return $this->db->affected_rows();
    }
}
