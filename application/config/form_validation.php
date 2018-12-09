<?php
defined('BASEPATH') or exit('No direct script access allowed');
$config = [
    'Sign_up/verify_sign_up'    => [
        [
            'field'  => 'username',
            'label'  => 'ombre de usuario',
            'rules'  => 'trim|required|min_length[4]|max_length[20]|is_unique[users.username]',
            'errors' => [
                'required'   => 'Debes insertar un n%s.',
                'min_length' => 'N%s muy corto (entre 4-20 carácteres).',
                'max_length' => 'N%s muy largo (entre 4-20 carácteres).',
                'is_unique'  => 'Este n%s ya existe.',
            ],
        ],
        [
            'field'  => 'pass',
            'label'  => 'contraseña',
            'rules'  => 'trim|required',
            'errors' => [
                'required' => 'Debes insertar una %s.',
            ],
        ],
        [
            'field'  => 'pass2',
            'label'  => 'contraseña',
            'rules'  => 'trim|required|matches[pass]',
            'errors' => [
                'required' => 'Debes confirmar la %s.',
                'matches'  => 'Las %ss no coinciden.',
            ],
        ],
        [
            'field'  => 'email',
            'label'  => 'orreo electrónico',
            'rules'  => 'trim|required|valid_email|is_unique[users.email]',
            'errors' => [
                'required'    => 'Debes insertar un c%s.',
                'valid_email' => 'C%s no valido.',
                'is_unique'   => 'C%s ya registrado.',
            ],
        ],
    ],
    'Log_in/verify_log_in'      => [
        [
            'field'  => 'username',
            'label'  => 'nombre de usuario',
            'rules'  => 'trim|required|callback_is_confirmed',
            'errors' => [
                'required'     => 'Debes insertar un %s o correo electrónico.',
                'is_confirmed' => 'Correo electrónico no verificado.',
            ],
        ],
        [
            'field'  => 'pass',
            'label'  => 'contraseña',
            'rules'  => 'trim|required|callback_is_valid_user[username]',
            'errors' => [
                'required'      => 'Debes insertar una %s.',
                'is_valid_user' => 'Usuario y/o contraseña incorrectos.',
            ],
        ],
    ],
    'admin/articulos/insertar'  => [
        [
            'field'  => 'name',
            'label'  => 'nombre',
            'rules'  => 'trim|required',
            'errors' => [
                'required' => 'Debe insertar un %s.',
            ],
        ],
        [
            'field'  => 'description',
            'label'  => 'descripción',
            'rules'  => 'trim|required',
            'errors' => [
                'required' => 'Debe insertar una %s.',
            ],
        ],
    ],
    'admin/articulos/modificar' => [
        [
            'field' => 'name',
            'label' => 'nombre',
            'rules' => 'trim',
        ],
        [
            'field' => 'description',
            'label' => 'descripción',
            'rules' => 'trim',
        ],
    ],
];
$config['error_prefix'] = '<div class="alert alert-danger">
<a class="close font-weight-light" data-dismiss="alert" href="#">×</a>';
$config['error_suffix'] = '</div>';
