<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script>
    $(document).ready(function() {
        $('#Articulos').on('change',function(){
            $('#response').html("");
            $.ajax({
                type:"POST",
                url: '<?=base_url("admin/comentariosArticulo"); ?>',
                dataType:'json',
                data: { id: $('#Articulos').val()}
            }).done(function (data) {
                $list = $('#response');
                $.each(data,function(i, obj) {
                    $list.append(`
                    <div id="`+obj.id+`" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">`+obj.comment+`</h5>
                            <small class="text-muted">`+obj.created+`  <a class='btn-remove'><i class='fas fa-trash'></i></a></small>
                        </div>
                    </div>
                    `);
                });
            }).fail(function (data) {
                console.log("no funciona");
            }).always(function() {
                console.log('complete');
            });
        });
        $('#response').on('click', '.btn-remove', function() {
            $.ajax({
                type: "POST",
                url: '<?=base_url("admin/elminarComentariosArticulos"); ?>',
                dataType:'json',
                data: { id: $(this).closest('div').parent().attr('id')}
            });
            $(this).closest('div').parent().fadeOut('slow', function(){
                $(this).remove();
            });
        });
    });
</script>
