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

	$get_personas = query("SELECT * FROM gh_personas WHERE id_usuario = '". esc_sql($_POST['id_usuario']) ."'");

	if(rows($get_personas))
	{
		$output = array('status' => '0', 'msg' => 'No se encontraron datos de este empleado');
		echo json_encode($output);		
	}
	else
	{
		$result_persona = assoc($get_personas);

		$data_persona = array(
			'id_usuario'	=> $result_persona['id_usuario'],
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



