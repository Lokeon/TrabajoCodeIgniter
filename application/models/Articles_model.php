<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
        $query  = "SELECT * FROM articles WHERE id BETWEEN $id AND $limit";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function getArticlesArray($id, $limit)
    {
        $query  = "SELECT id,name,image FROM articles WHERE id BETWEEN $id AND $limit";
        $result = $this->db->query($query);
        $data   = $result->result_array();
        for ($i = 0; $i < count($data); ++$i) {
            $data[$i]['index']   = $i;
            $data[$i]['url']     = base_url('article/' . $data[$i]['id']);
            $data[$i]['average'] = $this->getStar($data[$i]['id']);
        }
        return $data;
    }

    public function getStar($id_article)
    {
        $this->db->select('ROUND(AVG(stars),1) as meanStars');
        $this->db->from('comments');
        $this->db->where('id_article', $id_article);
        $mean = $this->db->get()->result_array()[0]['meanStars'];
        return ('' == $mean) ? 0 : $mean;
    }

    public function getStarUser($id_article, $id_user)
    {
        $star = $this->db->query("SELECT stars FROM comments WHERE id_article='$id_article' AND id_user='$id_user'");
        return $star->result_array()[0]['stars'];
    }

    public function updateStar($id_comentario, $value)
    {
        $this->db->query("UPDATE comments SET stars=$value WHERE id=$id_comentario");
        return $this->db->affected_rows() == 1;
    }

    public function getArticle($id)
    {
        $article = $this->db->query("SELECT name,description,image,store FROM articles WHERE id=$id");
        return $article->result_array()[0];
    }

    public function get_article()
    {
        $article = $this->db->query("SELECT id,name FROM articles");
        return $article->result_array();
    }

    public function getComments($id)
    {
        $comment = $this->db->query("SELECT comment,created,stars FROM comments WHERE id_article=$id");
        return ['comments' => $comment->result_array()];
    }
}
