<?php
function generate_view($self, $title, $body, $dbody = null)
{
    $data['title'] = $title;
    $self->load->view('loader/head', $data);
    $self->load->view('loader/navbar');
    $self->output->append_output('<div class="container">');
    $self->load->view($body, $dbody);
    $self->load->view('loader/footer');
}
