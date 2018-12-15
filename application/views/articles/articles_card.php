<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="card">
    <img class="card-img-top" src="{image}" alt="Imagen">
    <div class="card-body">
        <h5 class="card-title">{name}</h5>
        <p class="card-text"><i class="far fa-star"></i>Some example text.</p>
        <div id="star-{index}" class="stars">
        </div>
        <a href="{url}" class="btn btn-primary">Ver artículo</a>
    </div>
</div>
