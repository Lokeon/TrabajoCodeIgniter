<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	<a class="navbar-brand" href="#">Reviews</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03"
	 aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarsExample03">
		<?php if (!empty($this->session->userdata('user_id'))): ?>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
				 aria-expanded="false">Usuario</a>
				<div class="dropdown-menu" aria-labelledby="dropdown03">
					<a class="dropdown-item" href="#">Perfil</a>
					<a class="dropdown-item" href="#">Mis Reviews</a>
					<a class="dropdown-item" href="#">Log out</a>
				</div>
			</li>
		</ul>
		<?php else: ?>
		<form class="form-inline my-2 my-md-0">
			<div class="form-group">
				<input type="submit" class="btn btn-primary btn-block" value="Log in">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary btn-block"  value="Sign Up">
			</div>
		</form>
		<?php endif; ?>
	</div>
</nav>
