<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body">
                <h1 class="card-title text-center">Regístrate</h1>
                <?php echo form_open('Sign_up/verify_sign_up', ['class' => 'form-signin']); ?>
                    <div class="form-label-group">
                        <input type="text" id="inputUserName" class="form-control" placeholder="Nombre de usuario" required autofocus name="username">
                        <label for="inputUserName">Nombre de usuario</label>
                    </div>
                    <?php print form_error('username'); ?>
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required name="email">
                        <label for="inputEmail">Correo electrónico</label>
                    </div>
                    <?php print form_error('email'); ?>
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required name="pass">
                        <label for="inputPassword">Contraseña</label>
                    </div>
                    <?php print form_error('pass'); ?>
                    <div class="form-label-group">
                        <input type="password" id="inputPassword2" class="form-control" placeholder="Confirmar contraseña" required name="pass2">
                        <label for="inputPassword2">Confirmar contraseña</label>
                    </div>
                    <?php print form_error('pass2'); ?>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" value="Registrarme" type="submit" name="submit">Registrarme</button>
                </form>
            </div>
        </div>
    </div>
</div>