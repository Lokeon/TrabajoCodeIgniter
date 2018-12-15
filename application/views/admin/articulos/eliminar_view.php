<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Modal -->
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="Confirm" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Esta seguro de eliminar el articulo?
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="si" >Si</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
<h1 class="card-title text-center">Eliminar</h1>
<div class="list-group" id="response">
</div>
