<section class="content-header">
	<h1>
		Registrar Empleado
		<small>Registre el empleado a la institucion o sede a la cual pertence</small>
	</h1>	
</section>
<section class="content">	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="box box-info">
				<div class="box-header with-border"><h3 class="box-title">Formulario Empleados</h3></div>
				<form id="frm-crear-empleados" class="form-horizontal" action="javascript:" method="post" autocomplete="off">
					<div class="box-body">
						<div class="row">
							<div class="col-lg-6">					
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Institucion</label>
									<div class="col-sm-8">
										<select name="nit_inst" class="form-control required">	
											<?php comboBox('gh_institucion', array('nit', 'nombre_institucion')); ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Cedula Empleado</label>
									<div class="col-sm-8">
										<input type="text" name="cedula_emp" class="form-control required" placeholder="Cedula">
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
									<label for="Dato" class="col-sm-4 control-label">Estado Actual</label>
									<div class="col-sm-8">
										<select class="form-control required" name="estado">
											<?php comboBox('gh_estados', array('id_estado', 'estado')); ?>
										</select>
									</div>
								</div>
								<div class="form-group add-fecha-activo" style="display: none;">
									<label for="Dato" class="col-sm-4 control-label">Fecha Ingreso</label>
									<div class="col-sm-8">
										<input type="text" name="fecha_ingreso" class="form-control required datepicker" placeholder="Fecha de Ingreso">
									</div>
								</div>
								<div class="form-group add-fecha-retirado" style="display: none;">
									<label for="Dato" class="col-sm-4 control-label">Fechas</label>
									<div class="row">
										<div class="col-lg-3">
										<input type="text" class="form-control required datepicker" placeholder="Ingreso">
										</div>
										<div class="col-lg-3">
										<input type="text" class="form-control required datepicker" placeholder="Retiro">
										</div>
									</div>
								</div>
								<div class="form-group add-fecha-retirado-anteriores" style="display: none;">
									<label for="Dato" class="col-sm-4 control-label">Fechas</label>
									<div class="row">
										<div class="col-lg-3">
										<input type="text" class="form-control required datepicker" placeholder="Ingreso">
										</div>
										<div class="col-lg-3">
										<input type="text" class="form-control required datepicker" placeholder="Retiro">
										</div>
									</div>									
								</div>
								<div class="form-group add-fecha-retirado-motivo" style="display: none;">
									<label for="Dato" class="col-sm-4 control-label">Motivo</label>
									<div class="row">
										<div class="col-sm-7">
											<textarea class="form-control" name="motivo"></textarea>
										</div>										
									</div>									
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Nombres</label>
									<div class="col-sm-8">
										<input type="text" name="nombres" class="form-control required" placeholder="Nombres">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Apellidos</label>
									<div class="col-sm-8">
										<input type="text" name="apellidos" class="form-control required" placeholder="Apellidos">
									</div>
								</div>
                                <div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Fecha Nacimiento</label>
									<div class="col-sm-8">
										<input id="fecha_nacimiento" name="fecha_nac" type="text" class="form-control required datepicker" placeholder="Fecha Nacimiento">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Edad</label>
									<div class="col-sm-8">
										<input id="edad_empleado" name="edad" type="text" class="form-control required" placeholder="edad">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Ciudad</label>
									<div class="col-sm-8">
										<input type="text" name="ciudad" class="form-control required" placeholder="ciudad">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Direccion</label>
									<div class="col-sm-8">
										<input type="text" name="direccion" class="form-control required" placeholder="direccion">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Telefono</label>
									<div class="col-sm-8">
										<input type="text" name="telefono" class="form-control required" placeholder="telefono">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Celular</label>
									<div class="col-sm-8">
										<input type="text" name="celular" class="form-control required" placeholder="celular">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Correo</label>
									<div class="col-sm-8">
										<input type="email" name="correo" class="form-control required" placeholder="correo">
									</div>
								</div>
							</div>							
						</div>
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-lg-4"><input type="reset" class="btn btn-danger" value="Cancelar"/></div>
							<div class="col-lg-8"><input id="btn-crea-empleados" type="submit" class="btn btn-info" value="Registrar Empleados"/></div>
						</div>
					</div>
				</form>
			</div>			
		</div>
	</div>
</section>