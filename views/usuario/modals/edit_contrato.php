<div id="modal-edit-contrato" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar Informacion</h4>
      </div>
      <form id="frm-edita-contrato" class="frm-horizontal" action="javascript:" method="post" autocomplete="off">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <input id="id_table_contrato" type="hidden" name="id_auto"/>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Salario</label>
                <div class="col-sm-8">
                 <input type="text" name="salario" class="form-control required mod-margin-bottom" placeholder="Cedula">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">EPS</label>
                <div class="col-sm-8">
                  <input type="text" name="EPS" class="form-control required mod-margin-bottom" placeholder="EPS">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">AFP</label>
                  <div class="col-sm-8">
                  <input type="text" name="AFP" class="form-control required mod-margin-bottom" placeholder="AFP">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Fondo Cesantias</label>
                <div class="col-sm-8">
                  <input type="text" name="Cesantias" class="form-control required mod-margin-bottom" placeholder="Fondo Cesantias">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Caja de Compensacion</label>
                  <div class="col-sm-8">
                  <input type="text" name="Caja_Compensacion" class="form-control required mod-margin-bottom" placeholder="Caja Compensacion">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Poliza de Vida</label>
                  <div class="col-sm-8">
                    <input type="text" name="Poliza" class="form-control required mod-margin-bottom" placeholder="Poliza de Vida">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Enfermedad Laboral</label>
                <div class="col-sm-8">
                  <input type="text" name="Enfermedad_Laboral" class="form-control required mod-margin-bottom" placeholder="Enfermedad Laboral">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Quinquenios Entregados</label>
                  <div class="col-sm-8">
                  <input type="text" name="Quinquenios" class="form-control required mod-margin-bottom" placeholder="Quinquenios Entregados">
                </div>
              </div>
              <div class="form-group">
                <label for="Dato" class="col-sm-4 control-label">Entrega Quinquenio</label>
                  <div class="col-sm-8">
                  <input type="text" name="Entrega_Quinquenio" class="form-control required mod-margin-bottom" placeholder="Fecha de Entrega">
                </div>
              </div> 
            </div>                
          </div>              
        </div>          
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <button id="btn-edita-contrato" type="button" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>      
  </div>
</div>