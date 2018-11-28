<div class="container-fluid bg-light py-3">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card card-body">
                <h3 class="text-center mb-4">Iniciar sesión</h3>
                <?php echo form_open('Log_in/verify_log_in'); ?>
				<fieldset>
                    <div class="form-group has-error">
                        <input class="form-control input-lg" placeholder="Correo electrónico o nombre de usuario" name="username" value="<?php echo set_value('username'); ?>" type="text">
					</div>
					<div class="form-group has-success">
                        <input class="form-control input-lg" placeholder="Contraseña" name="pass" value="<?php echo set_value('password'); ?>" type="password">
					</div>
                    <?php echo form_error('username'); ?>
                    <?php echo form_error('pass'); ?>
					<div class="float-right">
                        <input class="btn btn-lg btn-primary" value="Iniciar sesión" name ="submit" type="submit">
                    </div>
					<div class="form-check form-check-inline">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
							<label class="custom-control-label" for="defaultChecked2">Recordarme</label>
						</div>
					</div>
                </fieldset>
                <?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
