<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script>
$(document).ready(function() {
    $.ajax({
        type:"POST",
        url: '<?=base_url("admin/listUsers"); ?>',
        dataType:'json'
    }).done(function(data) {
        $list = $('#response');
        $.each(data,function(i, obj) {
            $list.append(`
            <div id="`+obj.id+`" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">`+obj.username+`</h5>
                    <small class="text-muted"><a class='btn-remove'><i class='fas fa-trash'></i></a></small>
                </div>
            </div>
            `);
        });
        console.log(data);
    });
    $('#response').on('click', '.btn-remove', function() {
        $('#confirm').modal('show');
        var element = $(this).closest('div').parent().attr('id');
        $('#si').on('click', function() {
            $("#confirm").modal('hide');
            $.ajax({
                type: "POST",
                url: '<?=base_url("admin/removeUser"); ?>',
                dataType:'json',
                data: { id: element}
            }).done(function(data) {
            });
            $('#'+element).fadeOut('slow', function(){
                $(this).remove();
            });
        });
    });
});
</script>
