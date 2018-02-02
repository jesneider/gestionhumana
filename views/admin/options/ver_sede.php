<section class="content-header">
	<h1>
		Resumen de Sedes
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
                    <table id="table-sedes" class="table">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>CIUDAD</th>                                
                                <th>DIRECCION</th>
                                <th>TELEFONO</th>                                
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            creaDataTable('gh_sedes', '*', function($resource)
                            {
                                while($rows = assoc($resource))
                                {
                                    echo "<tr data-id='". $rows['id_auto'] ."'>
                                        <td>". $rows['nombre_sede'] ."</td>
                                         <td>". $rows['ciudad'] ."</td>
                                         <td>". $rows['direccion'] ."</td>
                                         <td>". $rows['telefono_fijo'] ."</td>
                                         <td>
                                         <div class='btn-group'>
                                            <button type='button' class='btn btn-default edit-data-sedes'><i class='fa fa-edit'></i></button>
                                            <button type='button' class='btn btn-default delete-sedes'><i class='fa fa-close'></i></button>                                            
                                            </div>
                                        </td>
                                        </tr>";
                                }
                            }, "id_auto DESC");
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>        
    </div>
</div>

<?php include APP_PATH . "/views/admin/modals/edit_sedes.php";?>