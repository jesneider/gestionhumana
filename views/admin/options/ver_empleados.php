<section class="content-header">
	<h1>
		Resumen General de Empleados
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
                    <table id="table-empleados" class="table">
                        <thead>
                            <tr>
                                <th>CEDULA</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>NACIMIENTO</th>
                                <th>EDAD</th>
                                <th>CIUDAD</th>
                                <th>DiRECCION</th>
                                <th>TELEFONO</th>
                                <th>CELULAR</th>
                                <th>CORREO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            creaDataTable('gh_empleados', '*', function($resource)
                            {
                                while($rows = assoc($resource))
                                {
                                    echo "<tr data-id='". $rows['id_empleado'] ."'>
                                        <td>". $rows['id_empleado'] ."</td>
                                         <td>". $rows['nombres'] ."</td>
                                         <td>". $rows['apellidos'] ."</td>
                                         <td>". $rows['fecha_nacimiento'] ."</td>
                                         <td>". $rows['edad'] ."</td>
                                         <td>". $rows['ciudad'] ."</td>
                                         <td>". $rows['direccion'] ."</td>
                                         <td>". $rows['telefono'] ."</td>
                                         <td>". $rows['celular'] ."</td>
                                         <td>". $rows['correo'] ."</td>
                                         <td>
                                         <div class='btn-group'>
                                            <button type='button' class='btn btn-default edit-data-empleados'><i class='fa fa-edit'></i></button>
                                            <button type='button' class='btn btn-default delete-empleados'><i class='fa fa-close'></i></button>                                            
                                            </div>
                                        </td>
                                        </tr>";
                                }
                            }, "id_empleado DESC");
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>        
    </div>
</div>

<?php include APP_PATH . "/views/admin/modals/edit_empleados.php";?>