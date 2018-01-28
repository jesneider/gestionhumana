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
                    <table id="table-institucion" class="table">
                        <thead>
                            <tr>
                                <th>CEDULA</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>NACIMIENTO</th>
                                <th>EDAD</th>
                                <th>CIUDAD</th>
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
                                    echo "<tr id='". $rows['id_empleado'] ."'>
                                        <td>". $rows['id_empleado'] ."</td>
                                         <td>". $rows['nombres'] ."</td>
                                         <td>". $rows['apellidos'] ."</td>
                                         <td>". $rows['fecha_nacimiento'] ."</td>
                                         <td>". $rows['edad'] ."</td>
                                         <td>". $rows['ciudad'] ."</td>
                                         <td>". $rows['telefono'] ."</td>
                                         <td>". $rows['celular'] ."</td>
                                         <td>". $rows['correo'] ."</td>
                                         <td>
                                         <div class='btn-group'>
                                            <button type='button' class='btn btn-default'><i class='fa fa-edit'></i></button>
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