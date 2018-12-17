<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container" style="padding-top:20px">
    <div class="row">
        <div class="card bg-white shadow" style="width:100%">
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="col-md-4">
                        <img src="//c1.staticflickr.com/5/4811/31389348647_22158c1637.jpg" class="img-fluid" width="400px" height="400px">
                    </div>
                    <div class="col-md-8">
                        <h3>Artículo</h3>
                        <div id="star-1" class="stars"></div>
                        <br>
                        <ul style="padding-left:20px; font-size:1.2rem">
                            <?php
                                $s = explode('*', "Es muy bonito*Es pequeño*Es rojo*Me gusta*Comentario 1*Comentario 2*Comentario 3*Comentario 4*Comentario 5");
                                foreach ($s as $string) {
                                    print ("<li>$string</li>");
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card bg-white shadow mt-3" style="width:100%">
            <div class="card-body">
                <div class="card-title" style="font-size:1.2rem">
                    <b>Añadir review<b>
                </div>
                <div id="star-0" class="stars"></div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Escribe tu comentario"></textarea>
                </div>
                <button id="comment" type="submit" class="btn btn-primary float-right">Enviar</button>
            </div>
        </div>
    </div>
</div>
