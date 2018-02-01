<?php

include "../../../config/constantes.php";
include APP_PATH . "/config/connect.php";

session_start();

checksession();

echo getDataFromTable(
    "gh_usuarios",
    array('user', 'pass','rol'),
    "id_usuario = '". esc_sql($_GET['record']). "'"
);