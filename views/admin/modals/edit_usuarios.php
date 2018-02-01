<div id="modal-edit-usuarios" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar Informacion</h4>
      </div>
      <form id="frm-edita-usuarios" class="frm-horizontal" action="javascript:" method="post" autocomplete="off">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">                
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Usuario</label>
                <div class="col-sm-8">
                  <input type="text" name="user" class="form-control required mod-margin-bottom" placeholder="Usuario">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Contraseña</label>
                <div class="col-sm-8">
                  <input type="text" name="pass" class="form-control required mod-margin-bottom" placeholder="Contraseña">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Rol</label>
                <div class="col-sm-8">
                  <input type="text" name="rol" class="form-control required mod-margin-bottom" placeholder="Rol">
                </div>
              </div> 
            </div>                
          </div>              
        </div>          
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <button id="btn-edita-usuarios" type="button" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>      
  </div>
</div>