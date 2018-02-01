<div id="modal-edit-sedes" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Editar Informacion</h4>
      </div>
        <form id="frm-edita-sedes" class="frm-horizontal" action="javascript:" method="post" autocomplete="off">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">                
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">Nombre</label>
                  <div class="col-sm-8">
                    <input type="text" name="nombre_sede" class="form-control required mod-margin-bottom" placeholder="Nombre Sede">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">Ciudad</label>
                  <div class="col-sm-8">
                    <input type="text" name="ciudad" class="form-control required mod-margin-bottom" placeholder="Ciudad">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">Direccion</label>
                  <div class="col-sm-8">
                    <input type="text" name="direccion" class="form-control required mod-margin-bottom" placeholder="Direccion">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">Telefono Fijo</label>
                  <div class="col-sm-8">
                    <input type="text" name="telefono_fijo" class="form-control required mod-margin-bottom" placeholder="Telefono Fijo">
                  </div>
                </div>
              </div>                
            </div>              
          </div>          
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button id="btn-edita-sedes" type="button" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </form>
      </div>      
  </div>
</div>