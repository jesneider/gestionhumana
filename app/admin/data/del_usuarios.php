<?php

include "../../../config/constantes.php";
include APP_PATH . "/config/connect.php";

session_start();

checksession();

echo deleteFromTable("gh_usuarios", $_POST, "id_usuario");
