<?php defined('BASEPATH') or exit('No direct script access allowed') ?>
<div style="padding-top:20px">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link
        <?php is_active($this, 'articulos'); ?>" href="<?=base_url('admin/articulos'); ?>">Articulos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link
        <?php is_active($this, 'comentarios') ?>" href="<?=base_url('admin/comentarios'); ?>">Comentarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link
        <?php is_active($this, 'usuarios') ?>" href="<?=base_url('admin/usuarios'); ?>">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link
        <?php is_active($this, 'Admin') ?>" href="#">Link</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
        <?php $function(); ?>
        </div>
    </div>
</div>
