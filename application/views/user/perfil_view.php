<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container" style="padding-top:20px">
    <div class="card bg-white shadow" style="width: 100%!important;">
        <div class="card-body">
            <h3 class="m-y-2"><b>Perfil del usuario</b></h3>
            <div class="row">
                <div class="col-md-8">
                    <h4><b>Nombre de usuario</b></h4>
                    <p class="ml-3">
                        <h6><?= $username ?></h6>
                    </p>
                    <h4><b>Correo electrónico</b></h4>
                    <p class="ml-3">
                        <h6><?= $email ?></h6>
                    </p>
                    <h4><b>Esta cuenta se creo el:</b></h4>
                    <p class="ml-3">
                        <h6><?= $created ?></h6>
                    </p>
                </div>                   
            </div>
        </div>
    </div>
    <div class="card bg-white shadow mt-3" style="width: 100%!important;">
        <div class="card-body">
            <h3 class="m-y-2">Reviews</h3>
            <div class="row">
                <div class="col-md-6">
                    <h6> <?php for($i = 0 ; $i < count($comments); ++$i){ 
                        print($comments[$i]['comment']."<br/>");
                        } ?> </h6>
                </div>
            </div>
        </div>
    </div>
</div>