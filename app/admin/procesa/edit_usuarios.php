<?php

include "../../../config/constantes.php";
include APP_PATH . "/config/connect.php";

session_start();

checksession();

echo editaRegistroOnTable('gh_usuarios', $_POST);