<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    print(
        innercard(
            $this,
            $results,
            $this->pagination->per_page / 2,
            "<div class='card-deck' style='margin-bottom: 10px;padding-top:20px'>",
            "</div>", "articles/articles_card"
        )
    );
?>
<div class="row justify-content-center" id="paginator" style="margin-top: 20px;">
    <?php print $links; ?>
</div>
