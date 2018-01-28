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

function affected_rows()
{
	return mysqli_affected_rows(open());
}

//validamos injection sql
function esc_sql($str)
{
	return mysqli_real_escape_string(open(), $str);
}

//creamos una consulta para insertar
function insert($table, $data, $auto = false, $debug = false)
{
	if(!isset($table) || !isset($data))
		return false;

	$query = "INSERT INTO " . $table;
	$fields = getFieldsFromTable($table);

	$query .= " ( " . implode(", ", $fields) . " ) ";
	
	foreach ($data as $key => $value)
		$values[] = "'" . $value . "'";

	if($auto)
		$query .= "VALUES ( '0', " . implode(", ", $values) . " )";
	else
		$query .= "VALUES (" . implode(", ", $values) . " )";

	if($debug)
		exit($query);

	$sql = query($query);

	$response = array();

	if($sql > 0)
		$response['status'] = true;
	else
		$response['status'] = false;

	return json_encode($response);
}

function getFieldsFromTable($table)
{
	$output = array();

	$query = query("SHOW COLUMNS FROM $table");

	if ( !$query )
		return false;

	if ( rows( $query ) === 0 )
		return false;

	while ( $row = assoc( $query ) )
	{
		$output[] = $row['Field'];
	}

	free_result($query);

	return $output;
}

//libera resultados de datos de una consulta
function free_result($result)
{
	return mysqli_free_result($result);
}

function checksession()
{
	if(!isset($_SESSION['user']) || count($_SESSION) <= 0)
	{
		session_destroy();
		?>
		<script type="text/javascript">location.reload()</script>
		<?php
	}
}