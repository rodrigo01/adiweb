<?php

if($action =='' or $action =='/'){
	$action = '/lista';
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

//metodo para separar el action y acciones
// poner mucha atencion
$explo = explode('/', $action);
$action = $explo[1];
$id = $explo[2];

if($action=='editarusuario'){

    // cargamos modelos
    $Usuarios = new Usuarios();

    //variables
    $id_usuario = $id;
    //print_r($explo);
    $usuario = $Usuarios->getUserXId($id_usuario);

    if($usuario!=null){
        include($appViews.'template/header.php');
        include($appViews.'administrador/usuario_mod.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='updateusuario'){

    // cargamos modelos
    $Usuarios = new Usuarios();

    //variables
    $datauser = array();
    $datauser['id_usuario'] = $_POST['idusuario'];
    $datauser['nombre_usuario'] = $_POST['nombreUsuario'];
    $datauser['user_usuario'] = $_POST['usuario'];
    $datauser['pass_usuario'] = md5($_POST['password']);
    $datauser['correo_usuario'] = $_POST['email'];

    $Usuarios = $Usuarios->updateUser($datauser);
    header('Location: '.$baseurl.'administrador/usuario/lista');
}

if($action=='borrarusuario'){
    
     // cargamos modelos
    $Usuarios = new Usuarios();

    //variables
    $id_usuario = $id;
    //print_r($explo);
    $usuario = $Usuarios->getUserXId($id_usuario);

    if($usuario!=null){
        include($appViews.'template/header.php');
        include($appViews.'administrador/usuario_eli.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='deleteusuario'){

    // cargamos modelos
    $Usuarios = new Usuarios();

    $id_usuario = $_POST['idUsuario'];    
    
    $Usuarios = $Usuarios ->deleteUser($id_usuario);
    header('Location: '.$baseurl.'administrador/usuario/lista');
}
?>


?>