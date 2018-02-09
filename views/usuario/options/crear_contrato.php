<section class="content-header">
	<h1>
		Registrar Datos de Contratacion
		<small>Registre los datos generales de contratacion</small>
	</h1>	
</section>
<section class="content">	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="box box-info">
				<div class="box-header with-border"><h3 class="box-title">Formulario de Contrato</h3></div>
				<form id="frm-crear-contrato" class="form-horizontal" action="javascript:" method="post" autocomplete="off">
					<div class="box-body">
						<div class="row">
							<div class="col-lg-6">														
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Empleado</label>
									<div class="col-sm-8">
										<select class="form-control required" name="sede">
											<?php comboBox('gh_empleados', array('id_empleado', 'nombres')); ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Cargo</label>
									<div class="col-sm-8">
										<select class="form-control required" name="cargo">
											<?php comboBox('gh_cargos', array('id_cargo', 'cargo')); ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Salario base Cotizacion</label>
									<div class="col-sm-8">
										<input type="text" name="salario" class="form-control required" placeholder="Salario">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">EPS</label>
									<div class="col-sm-8">
										<input type="text" name="EPS" class="form-control required" placeholder="EPS">
									</div>
								</div>
                                <div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">AFP</label>
									<div class="col-sm-8">
										<input type="text" name="AFP" class="form-control required" placeholder="AFP">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Fondo Cesantias</label>
									<div class="col-sm-8">
										<input type="text" name="Cesantias" class="form-control required" placeholder="fondo Cesantias">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Caja Compensacion</label>
									<div class="col-sm-8">
										<input type="text" name="Caja_Compenacion" class="form-control required" placeholder="Caja Compensacion">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Poliza de Vida Congregación</label>
									<div class="col-sm-8">
										<select class="form-control required" name="Poliza">
                                          <option value="">seleccione</option>
                                          <option value="Si">Si</option>
                                          <option value="No">No</option>
                                        </select>
									</div>
								</div>

								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Enfermedad Laboral</label>
									<div class="col-sm-8">
										<select class="form-control required" name="Enfermedad_Laboral">
                                          <option value="">seleccione</option>
                                          <option value="Estudio EPS">Estudio EPS</option>
                                          <option value="Estudio ARL">Estudio ARL</option>
                                          <option value="Calificada ARL">Calificada ARL</option>
                                        </select>
								    </div>
                               </div>

								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Quinquenios Entregados:</label>
									<div class="col-sm-8">
										<select class="form-control required" name="Quinquenios">
                                          <option value="">seleccione</option>
                                          <option value="5 Años">5 Años</option>
                                          <option value="10 Años">10 Años</option>
                                          <option value="15 Años">15 Años</option>
                                          <option value="20 Años">20 Años</option>
                                        </select>
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Entrega Quinquenio </label>
									<div class="col-sm-8">
										<input type="text" name="Entrega_Quinquenio" class="form-control required datepicker" placeholder="Fecha Entrega">
									</div>
								</div>
							</div>							
						</div>
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-lg-4"><input type="reset" class="btn btn-danger" value="Cancelar"/></div>
							<div class="col-lg-8"><input id="btn-crea-contrato" type="submit" class="btn btn-info" value="Registrar Contrato"/></div>
						</div>
					</div>
				</form>
			</div>			
		</div>
	</div>
</section>