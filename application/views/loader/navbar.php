<div id="hero">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
        <a href="<?=base_url() ?>" class="navbar-brand text-primary" id="logo">Reviews</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <?php if ($this->session->has_userdata('logged')): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Usuario</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Mis Reviews</a>
                        <a class="dropdown-item" href="<?=base_url('Log_in/logout') ?>">Log out</a>
                    </div>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="<?=base_url('welcome/signup') ?>">Regístrate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="<?=base_url('welcome/login') ?>">Iniciar sesión</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        </div>
    </nav>
</div>
