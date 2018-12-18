<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="card-title text-center">Modificar Articulo</h1>
<?php print form_open('admin/articulos/modificar'); ?>
  <div class="form-group">
    <?php print(generate_select("Articulo", $articles, true)); ?>
      <label for="nombre">Nombre Articulo</label>
      <input type="text" class="form-control" id="nombre" aria-describedby="nombrearticulo" placeholder="Ingrese nombre de articulo" autofocus name="name">
  </div>
  <div class="form-group">
    <label for="description">Descripción</label>
    <textarea class="form-control" id="description" rows="3" name="description" ></textarea>
  </div>
  <?php print(generate_select("Marca", $brand, true)); ?>
  <?php print(generate_select("Categoria", $tags, true)); ?>
  <div class="form-group">
    <label for="Tienda">Tienda</label>
    <input type="text" class="form-control" id="Tienda" aria-describedby="Tiendaarticulo" placeholder="Ingrese url tienda" name="store">
  </div>
  <div class="form-group">
    <label for="Imagen">Imagen</label>
    <input type="text" class="form-control" id="Imagen" aria-describedby="Imagenarticulo" placeholder="Ingrese url Imagen" name="image">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Modificar</button>
</form>