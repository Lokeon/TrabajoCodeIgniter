<div class='container-fluid'>
    <div class='row'>
    <?php
print("<div class='container-fluid'><div class='row'>");
foreach ($results as $elto) {
    $data = array(
        'image' => $elto->image,
        'nombreproducto' => $elto->name,
        'media' => 0,
        'linkarticulo' => 0,
    );
    print($this->parser->parse('article_card_view', $data, true));
}
echo '</div></div>' . $links; ?>
