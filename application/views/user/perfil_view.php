<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container" style="padding-top:20px">
    <div class="card bg-white shadow" style="width: 100%!important;">
        <div class="card-body">
            <h3 class="m-y-2"><b>Perfil del usuario</b></h3>
            <div class="row">
                <div class="col-md-6">
                    <h4><b>Nombre de usuario</b><i class="fas fa-edit" style="padding-left:8px" id="username"></i></h4>
                    <div class="form-group">
                    <input id="user" type="text" class="form-control" placeholder="<?= $username ?>" readonly>
                    </div>
                    <h4><b>Cambiar Contraseña</b><i class="fas fa-edit" style="padding-left:8px" id="pass"></i></h4>
                    <div class="form-group">
                    <input id="actpass" type="password" class="form-control" placeholder="Contraseña actual">
                    </div>
                    <div class="form-group">
                    <input id="newpass" type="password" class="form-control" placeholder="Nueva contraseña">
                    </div>
                    <div class="form-group">
                    <input id="repass" type="password" class="form-control" placeholder="Repita la contraseña">
                    </div>
                    <h4><b>Correo electrónico</b></h4>
                    <input type="email" class="form-control" placeholder="<?= $email ?>" readonly>
                    <h4><b>Fecha de creación</b></h4>
                    <input type="text" class="form-control" placeholder="<?= $created ?>" readonly>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-white shadow mt-3" style="width: 100%!important;">
        <div class="card-body">
            <h3 class="m-y-2">Reviews</h3>
            <div class="row">
                <div class="col-md-6">
                    <?php for ($i = 0; $i < count($comments); ++$i) {
                        print($comments[$i]['comment'] . "<br/>");
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
