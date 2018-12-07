<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    for ($i = 0; $i < count($results); ++$i) {
        if ($i % 4 == 0) {
            if ($i > 0) {
                print("</div>");
            }
            print("<div class='card-deck' style='margin-bottom: 10px;padding-top:20px'>");
        }
        $data = [
            'image'          => $results[$i]->image,
            'nombreproducto' => $results[$i]->name,
            'media'          => 0,
            'url'            => base_url('article/' . $results[$i]->id),
            'index'          => $i,
        ];
        print($this->parser->parse('articles/articles_card', $data, true));
    }
?>
</div>
<div class="row justify-content-center" id="paginator" style="margin-top: 20px;">
<?php print $links; ?>
</div>
