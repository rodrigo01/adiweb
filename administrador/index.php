<?php
session_start();
include('../config-db.php');


	/// control de variables principales
	/*echo '#'.$_GET['control'];
	echo '#'.$_GET['action'];*/
	if(isset($_GET['control'])){
		$control = $_GET['control'];
		$control = trim($control);       
	}else{
		$control = '';
	}
	if(isset($_GET['action'])){
		$action = $_GET['action'];
		$action = trim($action);
	}else{
		$action = '';
	}
			// si no elegimos controlador
	if($control==''){
		if(isset($_SESSION['estado']) and $_SESSION['estado']==1){
			include($appViews.'header.php');
			include($appViews.'principal.php');
			include($appViews.'footer.php');
		}
		else{
			//No esta logueado
			include('views/login.php');
		}
	}else{
		// si existe un controlador
		if(file_exists($appControl.$control.'.php')){
			include($appControl.$control.'.php');
		}
		else{
			include($appControl.'error404.php');
		}	
	}



?>