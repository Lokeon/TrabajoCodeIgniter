<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category_model extends CI_Model
{
    public function construct()
    {
        parent::_construct();
    }
    public function get_articulos($id_cat) //obtener articulos de una categoria determinada.

    {
        $consulta = $this->db->query("select * FROM `articles` where `id_category` = '$id_cat'");
        return $consulta->result();
    }

    public function get_categories()
    {
        $consulta = $this->db->query('SELECT * FROM category ORDER BY name ASC');
        return $consulta->result_array();
    }

    public function modificar_categoria()
    {
        $id   = $this->input->POST('id');
        $name = $this->input->POST('category');
        $this->db->query("UPDATE `category` SET `name` = '$name' WHERE `category`.`id` = $id");
    }

    public function insertar_categoria()
    {
        $category = $this->input->POST('category');
        return $this->db->query("INSERT INTO `category` (`id`, `name`) VALUES (NULL, '$category');");
    }

    public function eliminar_categoria($id_cat)
    {
        $this->db->query("DELETE FROM `category` where `id` = '$id_cat'");
    }

}
