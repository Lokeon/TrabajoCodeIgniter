<?php
class Articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function testArticle()
    {
        print($this->articles_model->getStar('1'));
    }

    public function testArticleUser()
    {
        print($this->articles_model->getStarUser(1, 1));
        $this->articles_model->updateStar(1, 1);
        print($this->articles_model->getStarUser(1, 1));
    }

    public function article($id)
    {
        $data = array_merge(array('average' => $this->articles_model->getStar($id)), $this->articles_model->getArticle($id), $this->articles_model->getComments($id));
        print('<pre>');
        print_r($data);
        print('</pre>');
        //generate_view($this,"Articulo","articles/article_view",$data);
    }
}
