<?php

$error_msg = '';

function app()
{
	global $error_msg;

	if(!isset($_SESSION['user']) || count($_SESSION) <= 0)
	{
		if(IS_POST)		
			login($_POST['user'], $_POST['pass']);		

		include APP_PATH . "/views/login.php";
	}

	if(isset($_SESSION['user']))
	{
		switch($_SESSION['rol'])
		{
			case "1":
				include APP_PATH . "/app/admin/admin-functions.php";
				include APP_PATH . "/views/admin/admin.php";				
			break;

			case "2":
				include APP_PATH . "/views/usuario/usuario.php";
			break;

			default:
				return false;
			break;
		}
	}

	logout();
}



function login($user, $pass)
{
	global $error_msg;

	if(!isset($user) || !isset($pass))
		return false;

	if(empty($user) || empty($pass))
		$error_msg = 'Ingrese su usuario y contraseña';
	else
	{
		include APP_PATH . "/config/connect.php";

		$busca_usuario = query("SELECT id_usuario, user, pass, rol FROM gh_usuarios WHERE user = '". esc_sql($user) ."' AND pass = '". esc_sql($pass) ."' LIMIT 1");

		if(rows($busca_usuario))
			$error_msg = 'Usuario y/o Contraseña Invalidos';
		else
		{
			$user = assoc($busca_usuario);

			$_SESSION['user'] = $user['id_usuario'];
			$_SESSION['rol'] = $user['rol'];

			?>
			<script type="text/javascript">
				location.href = '<?php echo BASE_APP ?>#!/session';
				location.reload();
			</script>
			<?php
		}
	}
}

function logout()
{
	if(!isset($_GET['logout']))
		return false;

	if(isset($_GET))
	{
		$logout = $_GET['logout'];

		if($logout == 'salir')
		{
			session_destroy();
			?>
			<script type="text/javascript">
				location.href = '<?php echo BASE_APP; ?>';				
			</script>
			<?php
		}
	}
}

session_start();

app();
