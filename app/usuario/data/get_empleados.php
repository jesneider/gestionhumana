<?php

include "../../../config/constantes.php";
include APP_PATH . "/config/connect.php";

session_start();

checksession();

echo getDataFromTable(
    "gh_empleados",
    array('id_auto', 'id_empleado', 'nombres','apellidos','fecha_nacimiento', 'edad','ciudad','direccion','telefono','celular','correo'),
    "id_empleado = '". esc_sql($_GET['record']). "'"
);