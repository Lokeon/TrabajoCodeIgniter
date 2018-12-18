<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <?php
        for ($i = 0; $i < count($comments); ++$i) {
            $data          = $comments[$i];
            $data['index'] = $i;
            $data['url']   = base_url("article/" . $data['id_article']);
            print($this->parser->parse('user/myreviews_card', $data, true));
        }
    ?>
</div>