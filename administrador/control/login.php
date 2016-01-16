<?php

if($action =='' or $action =='/'){
	$action = 'index';
}

if($action == 'index'){
    include($appViews.'template/header.php');
    include($appViews.'login.php');
    include($appViews.'template/footer.php');
}

//metodos
if($action=='/dologin'){
	// variables
	$Usuarios = new Usuarios();

	$user = $_POST['username'];
	$pass = md5($_POST['password']);

	//revisamos que exista
	$usuario = $Usuarios->getUser($user,$pass);

	if($usuario!=null){
		// todo es correcto savamos sessiones
		$_SESSION['estado'] = 1;
		$_SESSION['username'] = $usuario['user_usuario'];
		$_SESSION['nombre'] = $usuario['nombre_usuario'];
                include($appViews.'template/header.php');
		//include($appViews.'administrador/admin_dash.php');
		include($appViews.'template/footer.php');
	}else{
		//no existe usuario
		header('Location: '.$baseurl.'administrador/login/incorrecto');
	}
}

if($action=='/logout'){
	session_destroy();
	header('Location: '.$baseurl.'administrador/');
}

?>