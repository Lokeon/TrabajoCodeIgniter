<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row text-center align-items-center">
    <div class="col">
        <div class="card card-signin my-4">
            <div class="card-body">
                <h1 class="card-title text-center"><?=$mensaje ?></h1>
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout(function () {
        window.location.href="<?=$url ?>";
    }, 5000);
</script>