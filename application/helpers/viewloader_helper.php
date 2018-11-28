<?php
function generate_view($self, $title, $body)
{
    $data['title'] = $title;
    $self->load->view('head', $data);
    $self->load->view('navbar');
    $self->load->view($body);
    $self->load->view('footer');
}
