<?php
$config = array(
    'base_url' => base_url(),
    'total_rows' => $this->articles_model->countArticles(),
    'per_page' => 8,
    'use_page_numbers' => true,
    'num_links' => 'empty',
    'cur_tag_open' => '&nbsp;<a class="current">',
    'cur_tag_close' => '</a>',
    'next_link' => 'Siguiente',
    'prev_link' => 'Anterior',
);
