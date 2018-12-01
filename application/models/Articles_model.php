<?php
class Articles_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function countArticles()
    {
        return $this->db->count_all('articles');
    }

    public function getArticles($id, $limit)
    {
        $this->db->limit($limit);
        $this->db->where('id', $id);
        $query = $this->db->get('articles');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}
