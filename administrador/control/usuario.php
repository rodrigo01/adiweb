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
if($action=='/lista'){
	// variables
		// todo es correcto savamos sessiones
		include($appViews.'template/header.php');
        include($appViews.'administrador/admin_usuarios.php');
        include($appViews.'template/footer.php');
}

//metodos
if($action=='/agregarusuario'){
	// variables
		// todo es correcto savamos sessiones
		include($appViews.'template/header.php');
        include($appViews.'administrador/usuario_agr.php');
        include($appViews.'template/footer.php');
}

if($action=='/addusuario'){
	 //////////////////////////////////////////////////////////////
                            
    $admindata = array();

    //////////////////////////////////////////////////////////////
    if(isset($_POST['usuario']) and strlen(trim($_POST['usuario']))>=3){
		$usuario = $_POST['usuario']; 
    }else{
		$errors[] = 'Error';
    }
                
    ///////////////////////////////////////////////////////////////
    if(isset($_POST['password']) and strlen(trim($_POST['password']))>=3){
		$clave = $_POST['password'];
    }else{
		$errors[] = 'Error';
    }
            
                
    //////////////////////////////////////////////////////////////
    if(isset($_POST['email']) and strlen(trim($_POST['email']))>=3){
		$email = $_POST['email']; 
                    }else{
		$errors[] = 'Error';
    }
                
    ////////////////////////////////////////////////////////////////////
    if(isset($_POST['nombreUsuario'])){
		$nombre = $_POST['nombreUsuario']; 
    }else{
		$errors[] = 'Error';
    }

    if(sizeof($errors)==0){ 
        $objUsuario=new Usuarios();
        $res=$objUsuario->getUserOnly($usuario);                                                                   
        $usuario_aux = $datos['user_usuario'];
        $correo = $datos['correo_usuario'];                                    
        if($usuario_aux==null && $correo==null){
            $res = $objUsuario->addUser($usuario,md5($clave),$email,$nombre);
            header('Location: '.$baseurl.'administrador');
        }else{
            header('Location: '.$baseurl.'administrador');
        }
    }                 
}

if($action=='/updateusuario/'){
    include($appViews.'template/header.php');
    include($appViews.'administrador/usuario_mod.php');
    include($appViews.'template/footer.php');
}

?>