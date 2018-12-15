<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Brands_model extends CI_Model
{
    public function construct()
    {
        parent::_construct();
    }
    public function get_articulos($id_brand)
    {
        $consulta = $this->db->query("select * FROM `articles` where `id_brand` = '$id_brand'");
        return $consulta->result();
    }

    public function get_brands()
    {
        $consulta = $this->db->query('SELECT * FROM brands ORDER BY name ASC');
        return $consulta->result_array();
    }

    public function modificar_brands()
    {
        $id = $this->input->POST('id');
        $name = $this->input->POST('brand');
        $this->db->query("UPDATE `brands` SET `name` = '$name' WHERE `brands`.`id` = $id");
    }

    public function insertBrands($data)
    {
        $this->db->insert('brands', $data);
    }

    public function removeBrand($id)
    {
        $this->db->delete('brands', ['id' => $id]);
        $this->db->delete('articles', ['id_brand' => $id]);
        return $this->db->affected_rows();
    }

}
