<?php

//abre la conexion
function open()
{
	$con = mysqli_connect('localhost', 'root', '', 'academ');

	if(!$con)
		exit('Error : No se conecto a la BD');
	else
	{
		mysqli_set_charset($con, 'utf8');
		return $con;
	}
}

//cierra la conexion
function close()
{
	return mysqli_close(open());
}

//consulta
function query($query)
{
	return mysqli_query(open(), $query);
}

//filas
function rows($result)
{
	if($result == false || mysqli_num_rows($result) === 0)
		return true;
	else
		return false;
}

//busqueda
function assoc($result)
{
	return mysqli_fetch_assoc($result);
}

//validamos injection sql
function esc_sql($str)
{
	return mysqli_real_escape_string(open(), $str);
}

//creamos una consulta para insertar
/*function insert($table, $data, $auto = false, $debug = false)
{
	if(!isset($table) || !isset($data))
		return false;

	$query = "INSERT INTO " $table;

	if(count($data) <= 0)
		return false;

	if(is_array($data))
	{
		foreach ($data as $name => $value)
			$values['values'] = $value;
	}
}*/

//libera resultados de datos de una consulta
function free_result($result)
{
	return mysqli_free_result($result);
}