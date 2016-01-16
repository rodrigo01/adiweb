<?php

if($action=='/' or $action==''){
	$action = '/index';
}

if($action=='/index'){


	$Sliders = new Sliders();
	$slidersList = $Sliders->getSliders();

	include($appViews.'template/header.php');
	include($appViews.'sliders/lista_sliders.php');
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
		header('Location: '.$baseurl.'administrador/');
	}else{
		//no existe usuario
		header('Location: '.$baseurl.'administrador/login/incorrecto');
	}
}

if($action=='/salir'){

	session_destroy();
	header('Location: '.$baseurl.'administrador/');

}

?>