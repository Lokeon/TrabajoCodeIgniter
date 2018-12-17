<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script>
$(document).ready(function() {
    $('#username').on('click', function () {
        $('#user').add(`
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Contraseña" onclick="">
        </div>
        `);
    });
});
</script>
