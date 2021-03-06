<section class="content-header">
	<h1>
		Resumen de Usuarios
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
                        <table id="table-usuarios" class="table">
                            <thead>
                               <tr>
                                 <th>USUARIO</th>
                                 <th>CONTRASENA</th>                                
                                 <th>ROL</th>                                                               
                                 <th>ACCIONES</th>
                               </tr>
                            </thead>
                            <tbody>
                            <?php 
                            creaDataTable('gh_usuarios', '*', function($resource)
                            {
                                while($rows = assoc($resource))
                                {
                                 echo "<tr data-id='". $rows['id_usuario'] ."'>
                                    <td>". $rows['user'] ."</td>
                                    <td>". $rows['pass'] ."</td>
                                    <td>". $rows['rol'] ."</td>
                                    <td>
                                    <div class='btn-group'>
                                        <button type='button' class='btn btn-default edit-data-usuarios'><i class='fa fa-edit'></i></button>
                                        <button type='button' class='btn btn-default delete-usuarios'><i class='fa fa-close'></i></button>                                            
                                    </div>
                                    </td>
                                    </tr>";
                                }
                            },  "id DESC");
                            ?>
                            </tbody>
                       </table>
                   </div>
               </div>
           </div>
        </div>        
    </div>
</div>

<?php include APP_PATH . "/views/admin/modals/edit_usuarios.php";?>