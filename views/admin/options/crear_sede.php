<section class="content-header">
	<h1>
		Registrar Sede
		<small>Registre las sede que hace parte de la Institucion</small>
	</h1>	
</section>
<section class="content">	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="box box-info">
				<div class="box-header with-border"><h3 class="box-title">Formulario Sedes</h3></div>
				<form id="frm-crear-sede" class="form-horizontal" action="javascript:" method="post" autocomplete="off">
					<div class="box-body">
						<div class="row">
							<div class="col-lg-6">								
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">NIT Institucion</label>
									<div class="col-sm-8">
										<select name="nit_inst" class="form-control required">	
											<?php comboBox('gh_institucion', array('nit', 'nombre_institucion')); ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Nombre de Sede</label>
									<div class="col-sm-8">
										<input type="text" name="nombre_sede" class="form-control required" placeholder="nombre sede">
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
									<label for="Dato" class="col-sm-4 control-label">Telefono Fijo</label>
									<div class="col-sm-8">
										<input type="text" name="telefono" class="form-control required" placeholder="telefono fijo">
									</div>
								</div>								
							</div>							
						</div>
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-lg-4"><input type="reset" class="btn btn-danger" value="Cancelar"/></div>
							<div class="col-lg-8"><input id="btn-crea-sede" type="submit" class="btn btn-info" value="Registar Institucion"/></div>
						</div>
					</div>
				</form>
			</div>			
		</div>
	</div>
</section>