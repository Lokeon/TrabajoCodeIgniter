
<div class='container-fluid'>
    <div class='row'> 
    <?php 
    foreach ($result as $elto) {
        $data = array(

            'image' => $elto->image,
            'nombreproducto' => $elto->name,
            'media' => 0,
            'linkarticulo' => 0
        );
        $this->parser->parse('article-card-view', $data);
    } ?>
    </div>
</div>