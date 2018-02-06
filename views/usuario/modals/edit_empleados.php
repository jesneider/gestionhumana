<div id="modal-edit-empleados" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar Informacion</h4>
      </div>
      <form id="frm-edita-empleados" class="frm-horizontal" action="javascript:" method="post" autocomplete="off">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <input id="id_table_empleado" type="hidden" name="id_auto"/>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Cedula</label>
                <div class="col-sm-8">
                 <input type="text" name="id_empleado" class="form-control required mod-margin-bottom" placeholder="Cedula">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Nombres</label>
                <div class="col-sm-8">
                  <input type="text" name="nombres" class="form-control required mod-margin-bottom" placeholder="Nombres">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Apellidos</label>
                  <div class="col-sm-8">
                  <input type="text" name="apellidos" class="form-control required mod-margin-bottom" placeholder="Apellidos">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Fecha Nacimiento</label>
                <div class="col-sm-8">
                  <input id="fecha_nacimiento_edit" type="text" name="fecha_nacimiento" class="form-control datepicker required mod-margin-bottom" placeholder="Fecha Nacimiento">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Edad</label>
                  <div class="col-sm-8">
                  <input id="edad_empleado_edit" type="text" name="edad" class="form-control required mod-margin-bottom" placeholder="Edad">
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
                <label for="Dato" class="col-sm-4 control-label">Telefono</label>
                  <div class="col-sm-8">
                  <input type="text" name="telefono" class="form-control required mod-margin-bottom" placeholder="Telefono">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Celular</label>
                <div class="col-sm-8">
                  <input type="text" name="celular" class="form-control required mod-margin-bottom" placeholder="Celular">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Correo</label>
                <div class="col-sm-8">
                  <input type="text" name="correo" class="form-control required mod-margin-bottom" placeholder="Correo">
                </div>
              </div>
            </div>                
          </div>              
        </div>          
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <button id="btn-edita-empleados" type="button" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>      
  </div>
</div>