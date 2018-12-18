<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container" style="padding-top:20px">
    <div class="card bg-white shadow" style="width: 100%!important;">
        <div class="card-body">
            <div class="post-heading">
                <div class="meta">
                    <div class="title h5">
                        <b><a href="{url}">{name}</a></b>
                        <h6 class="text-muted time float-right">{created}</h6>
                    </div>
                        <div id="star-{index}" class="stars"></div>
                </div>
                <div class="post-description">
                    <p>{comment}</p>
                </div>

            </div>
        </div>
    </div>
</div>
