<?php

if($action =='' or $action =='/'){
	$action = 'index';
}

if($action == 'index'){
    include($appViews.'login.php');
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
		// todo es correcto salvamos sessiones
		$_SESSION['estado'] = 1;
		$_SESSION['username'] = $usuario['user_usuario'];
		$_SESSION['nombre'] = $usuario['nombre_usuario'];

		// si todo esta bien lo redirigira al administrador
		header('Location: '.$baseurl.'administrador/');
	}else{
            ?>
           <script>
            alert('Login Incorrecto');
            document.location=('http://www.arturoarellano.com/administrador/');
           </script>
           <?php
	}
}

if($action=='/logout'){
	session_destroy();
	header('Location: '.$baseurl.'administrador/');
}

?>