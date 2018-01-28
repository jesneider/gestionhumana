<?php

include "../../../config/constantes.php";
include APP_PATH . "/config/connect.php";

session_start();

checksession();

if(!IS_POST)
	return false;
else
{
	$output = array();

	$get_personas = query("SELECT * FROM gh_empleados WHERE id_empleado = '". esc_sql($_POST['id_empleado']) ."'");

	if(rows($get_personas))
	{
		$output = array('status' => '0', 'msg' => 'No se encontraron datos de este empleado');
		echo json_encode($output);		
	}
	else
	{
		$result_persona = assoc($get_personas);

		$data_persona = array(
			'id_usuario'	=> $result_persona['id_empleado'],
			'nombres'		=> $result_persona['nombres'],
			'apellidos'		=> $result_persona['apellidos'],
			'direccion'		=> $result_persona['direccion'],
			'telefono'		=> $result_persona['telefono'],
			'rol'			=> $_POST['id_rol']
		);

		$check = insert("gh_personas", $data_persona, true );
		$result = json_decode($check, true);

		if($result['status'])
			echo insert('gh_usuarios', $_POST, true);
	}
}



