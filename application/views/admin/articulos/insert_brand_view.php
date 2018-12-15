<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="card-title text-center">Insertar Marca</h1>
<?php print form_open('admin/articulos/insertbrand'); ?>
  <div class="form-group">
    <label for="nombre">Nombre Marca</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="nombremarca" placeholder="Ingrese nombre de la marca" required autofocus name="name">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Insertar</button>
</form>
