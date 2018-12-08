<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="card-title text-center">Insertar</h1>
<?php print form_open('admin/articulos/insertar'); ?>
  <div class="form-group">
    <label for="nombre">Nombre Articulo</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="nombrearticulo" placeholder="Ingrese nombre de articulo" required autofocus name="name">
  </div>
  <div class="form-group">
    <label for="description">Descripción</label>
    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
  </div>
  <?php print(generate_select("Marca", $brand)); ?>
<?php print(generate_select("Categoria", $tags)); ?>
<div class="form-group">
    <label for="Tienda">Tienda</label>
    <input type="text" class="form-control" id="Tienda" aria-describedby="Tiendaarticulo" placeholder="Ingrese url tienda" required autofocus name="tienda">
  </div>
  <div class="form-group">
    <label for="Imagen">Imagen</label>
    <input type="text" class="form-control" id="Imagen" aria-describedby="Imagenarticulo" placeholder="Ingrese url Imagen" required autofocus name="Imagen">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Insertar</button>
</form>
