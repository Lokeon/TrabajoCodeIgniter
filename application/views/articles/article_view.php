<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container" style="padding-top:20px">
    <div class="row">
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="<?=$image ?>" width="100px" height="100px">
            </div>
            <div class="card-block px-2">
                <h4 class="card-title">
                    <?=$name ?>
                </h4>
                <div id="star-0" class="stars">
                </div>
                <p class="card-text">
                    <?=$description ?>
                </p>
            </div>
            <ul class="list-group">
                <?php
                    for ($i = 0; $i < count($comments); ++$i) {
                        print("<li class='list-group-item'>{$comments[$i]['comment']}</li>");
                    }
                ?>
            </ul>
        </div>
    </div>
</div>
