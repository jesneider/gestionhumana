<section class="content-header">
    <h1>
        Resumen General de Contratacion
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
                    <table id="table-contrato" class="table">
                        <thead>
                            <tr>
                                <th>SALARIO</th>
                                <th>EPS</th>
                                <th>AFP</th>
                                <th>CESANTIAS</th>
                                <th>CAJA COMPENSACION</th>
                                <th>POLIZA DE VIDA</th>
                                <th>ENFERMEDAD LABORAL</th>
                                <th>QUINQUENIOS ENTREGADOS</th>
                                <th>ENTREGA QUINQUENIO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            creaDataTable('gh_contratacion', '*', function($resource)
                            {
                                while($rows = assoc($resource))
                                {
                                    echo "<tr data-id='". $rows['id_empleado'] ."'>
                                        <td>". $rows['id_empleado'] ."</td>
                                         <td>". $rows['salario'] ."</td>
                                         <td>". $rows['EPS'] ."</td>
                                         <td>". $rows['AFP'] ."</td>
                                         <td>". $rows['Cesantias'] ."</td>
                                         <td>". $rows['Caja_Compensacion'] ."</td>
                                         <td>". $rows['Poliza'] ."</td>
                                         <td>". $rows['Enfermedad_Laboral'] ."</td>
                                         <td>". $rows['Quinquenios'] ."</td>
                                         <td>". $rows['Entrega_Quinquenio'] ."</td>
                                         <td>
                                         <div class='btn-group'>
                                            <button type='button' class='btn btn-default edit-data-contrato' data-toggle='tooltip' data-original-title='Editar'><i class='fa fa-edit'></i></button>
                                            <button type='button' class='btn btn-default see-data-contrato' data-toggle='tooltip' data-original-title='Detalles'><i class='fa fa-file'></i></button>
                                            <button type='button' class='btn btn-default delete-contrato' data-toggle='tooltip' data-original-title='Eliminar'><i class='fa fa-close'></i></button>                                            
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

<?php include APP_PATH . "/views/usuario/modals/edit_contrato.php";?>