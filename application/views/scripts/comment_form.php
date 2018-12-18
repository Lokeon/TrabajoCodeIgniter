<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script src="<?=base_url('js/raty.js') ?>"></script>
<script>
    var scores = [{scores}];
    for (let index = 0; index < scores.length; index++) {
        const score = scores[index];
        $('#star-'+index).raty({
            readOnly : true,
            score    : scores[index]
        });
    }
    $('#star-comment').raty({ half: true });
</script>
<script>
    $(document).ready(function(){
        $('#comment').on('click', function(){
            $.ajax({
                type:"POST",
                url: '<?=base_url("Articles/addReview"); ?>',
                data: {
                    article: $('#article').val(),
                    score: $('#star-comment').raty('score'),
                    user: $('#user').val(),
                    text: $('#text').val()
                },
                dataType:'json'
            }).done(function (data){
                console.log(data);
                location.reload();
            });
        });
    });
</script>