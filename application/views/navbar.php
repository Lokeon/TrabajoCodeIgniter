<nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-between">
	<a class="navbar-brand" href="<?=base_url() ?>">Reviews</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03"
	 aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="float-right">
	<div class="collapse navbar-collapse" id="navbarsExample03">
		<?php if ($this->session->has_userdata('logged')): ?>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
				 aria-expanded="false">Usuario</a>
				<div class="dropdown-menu" aria-labelledby="dropdown03">
					<a class="dropdown-item" href="#">Perfil</a>
					<a class="dropdown-item" href="#">Mis Reviews</a>
					<a class="dropdown-item" href="<?=base_url() . 'Log_in/logout' ?>">Log out</a>
				</div>
			</li>
		</ul>
		<?php else: ?>
			<form class="form-inline my-2 my-md-0">
			<div class="form-group">
				<a href="<?= base_url() . 'welcome/login' ?>" role="button" class="btn btn-primary btn-block">Inicio de Sesion</a>
			</div>
			<div class="form-group">
				<a href="<?= base_url() . '/welcome/signup' ?>" role="button" class="btn btn-primary btn-block">Registrar</a>
			</div>
			</form>
		<?php endif; ?>
	</div>
	</div>
</nav>
