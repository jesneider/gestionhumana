<div id="modal-edit-intitucion" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Editar Informacion</h4>
      </div>
        <form id="frm-edita-institucion" class="frm-horizontal" action="javascript:" method="post" autocomplete="off">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <input id="id_table_institucion" type="hidden" name="id_auto"/>
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">Pais</label>
                  <div class="col-sm-8">
                    <select class="form-control required mod-margin-bottom" name="nombre_pais">
                      <?php comboBox('gh_paises', array('id_pais', 'pais')); ?>
                    </select>
                  </div>
                </div>                
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">NIT Institucion</label>
                  <div class="col-sm-8">
                    <input type="text" name="nit" class="form-control required mod-margin-bottom" placeholder="NIT Institucion">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">Nombre de Institucion</label>
                  <div class="col-sm-8">
                    <input type="text" name="nombre_institucion" class="form-control required mod-margin-bottom" placeholder="nombre institucion">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">Ciudad</label>
                  <div class="col-sm-8">
                    <input type="text" name="ciudad" class="form-control required mod-margin-bottom" placeholder="ciudad">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">Direccion</label>
                  <div class="col-sm-8">
                    <input type="text" name="direccion" class="form-control required mod-margin-bottom" placeholder="direccion">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">Telefono Fijo</label>
                  <div class="col-sm-8">
                    <input type="number" name="telefono_fijo" class="form-control required mod-margin-bottom" placeholder="telefono fijo">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Dato" class="col-sm-4 control-label">Correo Institucional</label>
                  <div class="col-sm-8">
                    <input type="email" name="correo_institucional" class="form-control required mod-margin-bottom" placeholder="Correo Institucional">
                  </div>
                </div>                
              </div>              
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button id="btn-edita-institucion" type="button" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </form>
      </div>      
  </div>
</div>