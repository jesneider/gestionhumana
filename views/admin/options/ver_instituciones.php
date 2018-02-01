<section class="content-header">
	<h1>
		Resumen General de Instituciones
		<small>Listado General</small>
	</h1>	
</section>
<section class="content">
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="box box-info">
            <div class="box-header with-border"><h3 class="box-title">Listado</h3></div>
            <div class="box-body">
            <div class="row">
                <div class="col-lg-12">
                    <table id="table-institucion" class="table">
                        <thead>
                            <tr>
                                <th>NIT</th>
                                <th>NOMBRE</th>
                                <th>CIUDAD</th>
                                <th>DIRECCION</th>
                                <th>TELEFONO</th>
                                <th>CORREO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            creaDataTable('gh_institucion', '*', function($resource)
                            {
                                while($rows = assoc($resource))
                                {
                                    echo "<tr data-id='". $rows['nit'] ."'>
                                        <td>". $rows['nit'] ."</td>
                                         <td>". $rows['nombre_institucion'] ."</td>
                                         <td>". $rows['ciudad'] ."</td>
                                         <td>". $rows['direccion'] ."</td>
                                         <td>". $rows['telefono_fijo'] ."</td>
                                         <td>". $rows['correo_institucional'] ."</td>
                                         <td>
                                         <div class='btn-group'>
                                            <button type='button' class='btn btn-default edit-data-institucion'><i class='fa fa-edit'></i></button>
                                            <button type='button' class='btn btn-default'><i class='fa fa-close'></i></button>                                            
                                            </div>
                                        </td>
                                        </tr>";
                                }
                            });                        
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>        
    </div>
</div>
<?php include APP_PATH . "/views/admin/modals/edit_institucion.php"; ?>