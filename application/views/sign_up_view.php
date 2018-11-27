<div class="container-fluid bg-light py-3">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card card-body">
				<h3 class="text-center mb-4">Registrarse</h3>
                <?php echo form_open('Sign_up/verify_sign_up'); ?>
				<fieldset>
					<div class="form-group has-error">
						<input class="form-control input-lg" placeholder="Nombre de usuario" name="username" type="text" value="<?php echo set_value('username'); ?>">
                    </div>
                    <?php echo form_error('username'); ?>
					<div class="form-group has-error">
						<input class="form-control input-lg" placeholder="Correo electrónico" name="email" type="text" value="<?php echo set_value('email'); ?>">
                    </div>
                    <?php echo form_error('email'); ?>
					<div class="form-group has-success">
						<input class="form-control input-lg" placeholder="Contraseña" name="pass" type="password" value="<?php echo set_value('pass'); ?>">
                    </div>
                    <?php echo form_error('pass'); ?>
					<div class="form-group has-success">
						<input class="form-control input-lg" placeholder="Confirma la contraseña" name="pass2" type="password" value="<?php echo set_value('pass2'); ?>">
                    </div>
                    <?php echo form_error('pass2'); ?>
					<input class="btn btn-lg btn-primary btn-block" value="Registrame" type="submit" name="submit">
                </fieldset>
                <?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
