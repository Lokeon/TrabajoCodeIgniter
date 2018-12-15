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
<?php if ($this->uri->segment(1) == "welcome" || $this->uri->segment(1) == "" || $this->uri->segment(1) == "article") {
    print($this->parser->parse('scripts/stars_js', ['scores' => $scores], true));
} elseif ($this->uri->uri_string() === "admin/comentarios/eliminar") {
    print($this->parser->parse('scripts/delete_comments', [], true));
} elseif ($this->uri->uri_string() === "admin/articulos/eliminar") {
    print($this->parser->parse('scripts/delete_article_js', [], true));
} elseif ($this->uri->uri_string() === "admin/articulos/deletebrand") {
    print($this->parser->parse('scripts/delete_brand', [], true));
} elseif ($this->uri->uri_string() === "admin/articulos/deletecategory") {
    print($this->parser->parse('scripts/delete_category', [], true));
}

?>
</body>
</html>
