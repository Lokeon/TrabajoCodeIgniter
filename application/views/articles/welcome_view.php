<?php
for ($i = 0; $i < count($results); ++$i) {
    if ($i % 4 == 0) {
        if ($i > 0) {
            print("</div>");
        }
        print("<div class='card-deck' style='margin-bottom: 10px;margin-top: 20px'>");
    }
    $data = array(
        'image' => $results[$i]->image,
        'nombreproducto' => $results[$i]->name,
        'media' => 0,
        'url' => base_url('article/' . $results[$i]->id),
    );
    print($this->parser->parse('articles/articles_card', $data, true));
}
?>
</div>
<div class="row justify-content-center" id="paginator" style="margin-top: 20px;">
<?php echo $links; ?>
</div>
