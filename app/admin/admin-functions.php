<?php

include APP_PATH . "/config/connect.php";


function getProfile($id_session)
{
	if(!isset($id_session))
		return false;

	$profile_name = '';

	$get_profile = query("SELECT nombres, apellidos FROM gh_personas WHERE id_usuario = '". esc_sql($id_session) ."' LIMIT 1");

	if(rows($get_profile))
		return false;
	else
	{
		$profile_data = assoc($get_profile);
		$profile_name = $profile_data['nombres'] ." ". $profile_data['apellidos'];
	}

	return $profile_name;
}

function getRol($id_session)
{
	if(!isset($id_session))
		return false;

	$rol = '';

	$get_rol = query("SELECT rol FROM gh_roles WHERE id = '". esc_sql($id_session) ."' LIMIT 1");

	if(rows($get_rol))
		return false;
	else
	{
		$profile_data = assoc($get_rol);
		$rol = $profile_data['rol'];
	}

	return $rol;
}

function routingViews($debug = false)
{
	if(!isset($_GET['PATH']))
	{
		include APP_PATH . "/views/dashboard.php";		
	}
	else
	{
		$request_uri = explode("/", $_GET['PATH']);

		$user_dir = ($_SESSION['user'] == '1') ? 'admin' : 'usuario';

		$view = APP_PATH . "/views/" . $user_dir . "/options/" . $request_uri[0] . "_" . $request_uri[1] . ".php";

		if($debug)
			print($view);

		if(!file_exists($view))
			print('404 not found!');
		else
			require_once $view;
	}
}

function comboBox($table, $fields)
{
	if(!isset($table) || count($fields) <= 0)
		return false;

	$query_inst = query("SELECT ". implode(", ", $fields) ." FROM " . $table);

	if(rows($query_inst))
		echo "<option value=''>Escoja una Opcion</option>";
	else
	{
		echo "<option value=''>Escoja un opcion</option>";

		while($options = assoc($query_inst))
			echo "<option value='". $options[$fields[0]] ."'>". $options[$fields[1]] ."</option>";
	}
}