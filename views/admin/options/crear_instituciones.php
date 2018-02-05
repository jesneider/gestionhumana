<section class="content-header">
	<h1>
		Registrar Institución Gestora
		<small>Con este formulario crea la institucion gestora, este perfil podra realizar la administracion y gestion de datos de nuevas instituciones</small>
	</h1>	
</section>
<section class="content">	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="box box-info">
				<div class="box-header with-border"><h3 class="box-title">Formulario Instituciones</h3></div>
				<form id="frm-crear-institucion" class="form-horizontal" action="javascript:" method="post" autocomplete="off">
					<div class="box-body">
						<div class="row">
							<div class="col-lg-6">								
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">NIT Institucion</label>
									<div class="col-sm-8">
										<input type="number" name="nit" class="form-control required" placeholder="NIT Institucion">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Nombre de Institucion</label>
									<div class="col-sm-8">
										<input type="text" name="nombre" class="form-control required" placeholder="nombre institucion">
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
										<input type="number" name="telefono_fijo" class="form-control required" placeholder="telefono fijo">
									</div>
								</div>
								<div class="form-group">
									<label for="Dato" class="col-sm-4 control-label">Correo Institucional</label>
									<div class="col-sm-8">
										<input type="email" name="correo" class="form-control required" placeholder="Correo Institucional">
									</div>
								</div>								
							</div>							
						</div>
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-lg-4"><input type="reset" class="btn btn-danger" value="Cancelar"/></div>
							<div class="col-lg-8"><input id="btn-frm-registra-inst" type="submit" class="btn btn-info" value="Registrar Institucion"/></div>
						</div>
					</div>
				</form>
			</div>			
		</div>
	</div>
</section>