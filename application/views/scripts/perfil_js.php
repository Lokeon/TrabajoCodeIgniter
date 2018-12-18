<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script>
$(document).ready(function() {
    $('#username').on('click', function () {
        if($('#user').attr('readonly')) {
            $('#user').attr('readonly', false);
        } else {
            $('#user').attr('readonly', true);
        }
        if(!$('#user').attr('readonly')) {
            $('#user').keypress(function(event){
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13'){
                    if($('#user').val() !== "") {
                        $.ajax({
                            type:"POST",
                            url: '<?=base_url("User/changeUser"); ?>',
                            data: { function: 'unique', args: [$('#user').val()] },
                            dataType:'json'
                        }).done(function(data) {
                            if(data) {
                                $.ajax({
                                    type:"POST",
                                    url: '<?=base_url("User/changeUser"); ?>',
                                    data: { function: 'update', args: ["<?=$id ?>",$('#user').val()] },
                                    dataType:'json'
                                }).done(function (data) {
                                    console.log(data);
                                    window.alert("Usuario cambiado");
                                    location.reload();
                                });
                            }
                        });
                    }
                }
            });
        }
    });
    $('#pass').on('click',function () {
        if($('#actpass').val() !== "") {
            $.ajax({
                type:"POST",
                url: '<?=base_url("User/changePassword"); ?>',
                data: { function: 'check', args: ["<?=$id ?>", $('#actpass').val()] },
                dataType:'json'
            }).done(function(data) {
                if(data && $('#newpass').val() === $('#repass').val()) {
                    $.ajax({
                        type:"POST",
                        url: '<?=base_url("User/changePassword"); ?>',
                        data: { function: 'update', args: ["<?=$id ?>", $('#newpass').val()] },
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
