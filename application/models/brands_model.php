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
        $id   = $this->input->POST('id');
        $name = $this->input->POST('brand');
        $this->db->query("UPDATE `brands` SET `name` = '$name' WHERE `brands`.`id` = $id");
    }

    public function insertar_brands()
    {
        $brand = $this->input->POST('brand');
        return $this->db->query("INSERT INTO `brands` (`id`, `name`) VALUES (NULL, '$brand');");
    }

    public function eliminar_articulo($id)
    {
        $this->db->query("DELETE FROM `comments` where `id_article` = '$id'");
        $this->db->query("DELETE FROM `articles` where `id` = '$id'");
    }

    public function eliminar_brand($id_brand)
    {
        $this->db->query("DELETE FROM `brands` where `id` = '$id_brand'");
    }

}
