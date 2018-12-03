<?php
class Articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function testArticle()
    {
        print($this->article_model->getStar('1'));
    }
}
