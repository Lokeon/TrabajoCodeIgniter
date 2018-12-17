<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container" style="padding-top:20px">
    <div class="row">
        <div class="card flex-row flex-wrap text-center">
            <div class="card-header border-0">
                <img src="<?=$image ?>" width="300px" height="300px">
            </div>
            <div class="card-block px-2 pt-3">
                <h4 class="card-title ">
                    <h2><?=$name ?></h2>
                </h4>
            </div>
            <div id="star-0" class="stars"></div>
            <div class="card-block px-2 pb-5">
                <p class="list-group">
                <?php
                    $s = explode('*', $description);
                    foreach ($s as $key) {
                        print("-" . $key . "<br/>");
                    }
                ; ?>
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
