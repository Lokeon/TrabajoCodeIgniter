<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container" style="padding-top:20px">
    <div class="card bg-white shadow" style="width: 100%!important;">
        <div class="card-body">
            <h3 class="m-y-2"><b>Perfil del usuario</b></h3>
            <div class="row">
                <div class="col-md-6">
                    <h6><b>Nombre de usuario</b></h6>
                    <p class="ml-3">
                        {username}
                    </p>
                    <h6><b>Correo electrónico</b></h6>
                    <p class="ml-3">
                        {correo}
                    </p>
                    <h6><b>Esta cuenta se creo el:</b></h6>
                    <p class="ml-3">
                        {fecha}
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
                    {reviews}
                </div>
            </div>
        </div>
    </div>
</div>