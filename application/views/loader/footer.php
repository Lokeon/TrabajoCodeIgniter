<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#close-sidebar").click(function() {
            $("#wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function() {
            $("#wrapper").addClass("toggled");
        });
    });
    </script>
<?php if ($this->uri->segment(1) == "welcome" || $this->uri->segment(1) == "") : ?>
<script src="<?= base_url('js/raty.js') ?>"></script>
<script>
var scores = [<?= $scores ?>];
for (let index = 0; index < scores.length; index++) {
    const score = scores[index];
    $('#star-'+index).raty({
        readOnly : true,
        score    : scores[index]
    });
}
</script>
<?php elseif ($this->uri->segment(3) == "eliminar") : ?>
<script> 
    $(document).ready(function() {
        $('#Articulos').on('change',function(){
            $.ajax({ type:"POST",
            url: '<?= base_url('admin/comentariosArticulo'); ?>', 
            dataType:'json',
            data:{id:$('#Articulos').val()},
            success:function(obj, textstatus) {
                console.log(obj.result);
            }});
        });
    });                                    
</script>
<?php endif; ?>
</body>
</html>
