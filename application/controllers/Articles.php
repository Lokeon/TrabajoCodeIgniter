<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function article($id)
    {
        $data = array_merge(
            $this->articles_model->getArticle($id),
            $this->articles_model->getComments($id)
        );
        $string = $this->articles_model->getStar($id) . ",";
        $string .= implode(',', array_column($data["comments"], 'stars'));
        $foot["scores"] = $string;
        $data['id'] = $id;
        generate_view($this, "Articulo", "articles/article_view", $data, $foot);
    }

    public function addReview()
    {
        $data = array_filter([
            'id_article' => $this->input->post('article'),
            'id_user' => $this->input->post('user'),
            'comment' => $this->input->post('text'),
            'stars' => $this->input->post('score'),
        ]);
        header('Content-Type: application/json');
        print(json_encode($this->articles_model->addReview($data)));
    }
}
