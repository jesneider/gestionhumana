<?php

include "../../../config/constantes.php";
include APP_PATH . "/config/connect.php";

session_start();

checksession();

echo getDataFromTable(	 
	"gh_institucion",
	array('id_auto', 'nombre_pais', 'nit', 'nombre_institucion', 'ciudad', 'direccion', 'telefono_fijo', 'correo_institucional'),
	"nit = '". esc_sql($_GET['record']) ."'"	
);

