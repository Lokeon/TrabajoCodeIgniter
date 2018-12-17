<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script>
$(document).ready(function() {
    $('#username').one('click', function () {
        $('#user').append(`
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Contraseña" onclick="">
        </div>
        `);
    });
});
</script>
