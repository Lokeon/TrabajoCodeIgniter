<?php
defined('BASEPATH') or exit('No direct script access allowed');
function generate_view($self, $title, $body, $dbody = null, $dfoot = null)
{
    $data['title'] = $title;
    $self->load->view('loader/head', $data);
    $self->load->view('loader/sidebar');
    $self->output->append_output('<div class="container">');
    $self->load->view($body, $dbody);
    $self->load->view('loader/footer', $dfoot);
}
