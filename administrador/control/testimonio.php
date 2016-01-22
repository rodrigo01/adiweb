<?php

if($action =='' or $action =='/'){
	$action = '/lista';
}

//metodos
if($action=='/lista'){
	// variables
	// todo es correcto savamos sessiones
	include($appViews.'template/header.php');
        include($appViews.'testimonio/testimonio_testimonios.php');
        include($appViews.'template/footer.php');
}

//metodos
if($action=='/agregartestimonio'){
	// variables
	// todo es correcto savamos sessiones
	include($appViews.'template/header.php');
        include($appViews.'testimonio/testimonio_agr.php');
        include($appViews.'template/footer.php');
}

if($action=='/addtestimonio'){
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['contenidoTestimonio']) and strlen(trim($_POST['contenidoTestimonio']))>=3){
		$contenidoTestimonio= $_POST['contenidoTestimonio'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['videoTestimonio']) and strlen(trim($_POST['videoTestimonio']))>=3){
		$videoTestimonio = $_POST['videoTestimonio'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['clienteTestimonio']) and strlen(trim($_POST['clienteTestimonio']))>=3){
		$clienteTestimonio = $_POST['clienteTestimonio'];
    }else{
		$errors[] = 'Error';
    }
    
    // cargamos classe para subir archivos y definimos que nos agregue el tiempo al final 
    //(para evitar que existan archivos duplicadas y no nos rompa el proceso)
    $Uploads = new Uploads();
    $Uploads->addtime = 1;

    // cargamos la imagen
    $archivoResultado = $Uploads->doUpload('fileToUpload','../images/'); // el primero corresponde a que $_FILES['fileToUpload'] y el segundo a la ruta de subida
    
    if($archivoResultado['status']==1){
        // la subida es correcta
        $imgTestimonio = $archivoResultado['filename'];
    }else{
        $errors[] = 'Error en subida de archivo/ talvez no se subio';
    }
    
    if(sizeof($errors)==0){ 
        $objTestimonio = new Testimonios();
                
        $res = $objTestimonio->AddTestimonio($contenidoTestimonio,$imgTestimonio,$videoTestimonio,$clienteTestimonio);
        header('Location: '.$baseurl.'administrador/testimonio/lista');
    }else{
        header('Location: '.$baseurl.'administrador');
    }
   
}// fin de metodo

//metodo para separar el action y acciones
// poner mucha atencion
$explo = explode('/', $action);
$action = $explo[1];
$id = $explo[2];

if($action=='editartestimonio'){
    
    $Testimonios = new Testimonios();
    
    //variables
    $id_testimonio=$id;
   
    $testimonio = $Testimonios->getTestimonioXId($id_testimonio);

    if($testimonio!=null){
        include($appViews.'template/header.php');
        include($appViews.'testimonio/testimonio_mod.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='updatetestimonio'){

    // cargamos modelos
    $Testimonios = new Testimonios();

    $id_testimonio = $_POST['idTestimonio'];
    $contenido_testimonio = $_POST['contenidoTestimonio'];
    $video_testimonio = $_POST['videoTestimonio'];
    $cliente_testimonio = $_POST['clienteTestimonio'];
   
    $Testimonios = $Testimonios->updateTestimonio($id_testimonio,$contenido_testimonio,$video_testimonio,$cliente_testimonio);
    header('Location: '.$baseurl.'administrador/testimonio/lista');
}

if($action=='borrartestimonio'){
    
    $Testimonios = new Testimonios();
    
    //variables
    $id_testimonio=$id;
   
    $testimonio = $Testimonios->getTestimonioXId($id_testimonio);

    if($testimonio!=null){
        include($appViews.'template/header.php');
        include($appViews.'testimonio/testimonio_eli.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='deletetestimonio'){

    // cargamos modelos
    $Testimonios = new Testimonios();

    $id_testimonio = $_POST['idTestimonio'];    
    
    $Testimonios= $Testimonios->deleteTestimonio($id_testimonio);
    header('Location: '.$baseurl.'administrador/testimonio/lista');
}
?>
