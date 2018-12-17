<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script>
$(document).ready(function() {
    $('#username').on('click', function () {
        if($('#user').attr('readonly')) {
            $('#user').attr('readonly', false);
        } else {
            $('#user').attr('readonly', true);
        }
        //$this->form_validation->is_unique($user, "users.username")
    });
    $('#pass').on('click',function () {
        if($('#actpass').val() !== "") {
            $.ajax({
                type:"POST",
                url: '<?= base_url("User/changePassword"); ?>',
                data: { function: 'check', args: ["<?= $id ?>", $('#actpass').val()] },
                dataType:'json'
            }).done(function(data) {
                if(data && $('#newpass').val() === $('#repass').val()) {
                    $.ajax({
                        type:"POST",
                        url: '<?= base_url("User/changePassword"); ?>',
                        data: { function: 'update', args: ["<?= $id ?>", $('#newpass').val()] },
                        dataType:'json'
                    }).done(function (data) {
                        $('#actpass').val('');
                        $('#newpass').val('');
                        $('#repass').val('');
                        window.alert("Contraseña cambiada");
                    });
                }
            });
        }
    });
});
</script>
