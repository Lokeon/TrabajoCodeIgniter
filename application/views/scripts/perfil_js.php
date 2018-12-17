<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script>
$(document).ready(function() {
    $('#username').on('click', function () {
        if($('#user').attr('readonly')) {
            $('#user').attr('readonly', false);
        } else {
            $('#user').attr('readonly', true);
        }
    });
});
</script>
