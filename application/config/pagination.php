<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config = array(
    'base_url' => base_url('welcome/index'),
    'total_rows' => 100,
    'per_page' => 8,
    'use_page_numbers' => true,
    'num_links' => 'empty',
);
//$config['page_query_string'] = true;
$config['uri_segment'] = 3;
$config['full_tag_open'] = '<div class="pagination-lg text-center"><nav><ul class="pagination justify-content-center">';
$config['full_tag_close'] = '</ul></nav></div>';
$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
$config['num_tag_close'] = '</span></li>';
$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
$config['next_tag_close'] = '<span aria-hidden="true"></span></span></li>';
// $config['next_tag_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
$config['prev_tag_close'] = '</span></li>';
$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
$config['first_tag_close'] = '</span></li>';
$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
$config['last_tag_close'] = '</span></li>';
