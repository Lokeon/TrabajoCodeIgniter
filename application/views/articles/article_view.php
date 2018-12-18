<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container" style="padding-top:20px">
    <div class="row">
        <div class="card bg-white shadow" style="width:100%">
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?=$image ?>" class="img-fluid" width="400px" height="400px">
                    </div>
                    <div class="col-md-8">
                        <h3><?=$name ?></h3>
                        <div id="star-0" class="stars"></div>
                        <br>
                        <ul style="padding-left:20px; font-size:1.2rem">
                            <?php
                                $s = explode('*', $description);
                                foreach ($s as $string) {
                                    print("<li>$string</li>");
                                }
                            ?>
                        </ul>
                        <a href="<?=$store ?>" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true">Comprar</a>
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
                <div id="star-comment" class="stars"></div>
                <input id="article" type="hidden" value="<?=$id ?>">
                <input id="user" type="hidden" value="<?=$this->session->userdata('userinfo')[0]['id'] ?>">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Escribe tu comentario" id="text"></textarea>
                </div>
                <button id="comment" type="submit" class="btn btn-primary float-right"<?php print((!$this->session->userdata('admin') && $this->session->userdata('logged') ? "" : "disabled")); ?>>Enviar</button>
            </div>
        </div>
    </div>
    <div class="row">
    <?php
        for ($i = 0; $i < count($comments); ++$i) {
            $data          = $comments[$i];
            $data['index'] = $i + 1;
            print($this->parser->parse('user/comments_view', $data, true));
        }
    ?>
    </div>
</div>
