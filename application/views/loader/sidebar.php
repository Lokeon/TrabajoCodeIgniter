<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div id="sidebar-wrapper">
<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
</a>
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="<?=base_url() ?>">
                Reviews
            </a>
        </li>
<?php if ($this->session->userdata('logged')): ?>
<?php if ($this->session->userdata('admin')): ?>
        <li>
            <a href="<?=base_url('Admin') ?>"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>
        <?php else: ?>
        <li>
            <a href="#"><i class="fas fa-user"></i>Perfil</a>
        </li>
        <li>
            <a href="#"><i class="fas fa-comments"></i></i>Reviews</a>
        </li>
        <?php endif; ?>
        <li>
            <a href="<?=base_url('Log_in/logout') ?>"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
        </li>
<?php else: ?>
        <li>
            <a href="<?=base_url('welcome/signup') ?>"><i class="fas fa-user-plus"></i></i>Regístrate</a>
        </li>
        <li>
            <a href="<?=base_url('welcome/login') ?>"><i class="fas fa-sign-in-alt"></i></i>Iniciar sesión</a>
        </li>
<?php endif; ?>
        <li>
            <a href="#" id="close-sidebar"><i class="fas fa-times"></i>Colapsar</a>
        </li>
    </ul>
</div>
<div id="page-content-wrapper">
