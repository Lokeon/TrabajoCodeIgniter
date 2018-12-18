<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script src="<?= base_url('js/raty.js') ?>"></script>
<script>
    var scores = [{scores}];
    for (let index = 0; index < scores.length; index++) {
        const score = scores[index];
        $('#star-'+index).raty({
            readOnly : true,
            score    : scores[index]
        });
    }
</script>
