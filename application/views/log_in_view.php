<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body">
                <h1 class="card-title text-center">Iniciar sesión</h1>
                <?php echo form_open('Log_in/verify_log_in', ['class' => 'form-signin']); ?>
                    <div class="form-label-group">
                        <input type="text" id="inputEmail" class="form-control" placeholder="Correo electrónico o nombre de usuario" required autofocus name="username">
                        <label for="inputEmail">Nombre de usuario</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required name="pass">
                        <label for="inputPassword">Contraseña</label>
                    </div>
                    <?php print form_error('username'); ?>
<?php print form_error('pass'); ?>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Recordarme</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" value="Iniciar sesión" type="submit" name="submit">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>
</div>
