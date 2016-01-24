<?php

if($action =='' or $action =='/'){
	$action = '/lista';
}

//metodos
if($action=='/lista'){
	// variables
	// todo es correcto savamos sessiones
	include($appViews.'template/header.php');
        include($appViews.'producto/producto_productos.php');
        include($appViews.'template/footer.php');
}

//metodos
if($action=='/agregarproducto'){
	// variables
	// todo es correcto savamos sessiones
	include($appViews.'template/header.php');
        include($appViews.'producto/producto_agr.php');
        include($appViews.'template/footer.php');
}

if($action=='/addproducto'){
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['tituloProducto']) and strlen(trim($_POST['tituloProducto']))>=3){
		$tituloProducto = $_POST['tituloProducto'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['informacionProducto']) and strlen(trim($_POST['informacionProducto']))>=3){
		$informacionProducto= $_POST['informacionProducto'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['precioProducto']) and strlen(trim($_POST['precioProducto']))>=3){
		$precioProducto = $_POST['precioProducto'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['envioProducto']) and strlen(trim($_POST['envioProducto']))>=3){
		$envioProducto = $_POST['envioProducto'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['estadoProducto']) and strlen(trim($_POST['estadoProducto']))>=1){
		$estadoProducto= $_POST['estadoProducto'];
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
        $imgProducto= $archivoResultado['filename'];
    }else{
        $errors[] = 'Error en subida de archivo/ talvez no se subio';
    }
    if(sizeof($errors)==0){ 
        $objProducto = new Productos();
        //$res = $objActividad->getActividadXSeccion($_POST['nombreActividad']); // buscas una actividad por nombres pero es seccion?
        //$seccion_actividad = $datos['seccion_actividad'];
        
        $res = $objProducto->addProducto($_POST['tituloProducto'], $_POST['informacionProducto'], $_POST['precioProducto'], $_POST['envioProducto'], $_POST['estadoProducto'], $imgProducto);
        header('Location: '.$baseurl.'administrador/producto/lista');
    }else{
        header('Location: '.$baseurl.'administrador');
    }
   
}// fin de metodo

//metodo para separar el action y acciones
// poner mucha atencion
$explo = explode('/', $action);
$action = $explo[1];
$id = $explo[2];

if($action=='editarproducto'){
    
    $Productos = new Productos();
    
    //variables
    $id_producto=$id;
   
    $producto = $Productos->getProductoXId($id_producto);

    if($producto!=null){
        include($appViews.'template/header.php');
        include($appViews.'producto/producto_mod.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='updateproducto'){

    // cargamos modelos
    $Productos = new Productos();

    //variables
   
    $idProducto = $_POST['idProducto'];
    $tituloProducto = $_POST['tituloProducto'];
    $informacionProducto = $_POST['informacionProducto'];
    $precioProducto = $_POST['precioProducto'];
    $envioProducto = $_POST['envioProducto'];
    $estadoProducto = $_POST['estadoProducto'];
    // cargamos classe para subir archivos y definimos que nos agregue el tiempo al final 
    //(para evitar que existan archivos duplicadas y no nos rompa el proceso)
    $Uploads = new Uploads();
    $Uploads->addtime = 1;
  
    // cargamos la imagen
    $archivoResultado = $Uploads->doUpload('fileToUpload','../images/'); // el primero corresponde a que $_FILES['fileToUpload'] y el segundo a la ruta de subida
    
    if($archivoResultado['status']==1){
        // la subida es correcta
        $imgProducto= $archivoResultado['filename'];
    }else{
        $errors[] = 'Error en subida de archivo/ talvez no se subio';
    }
    
    $Productos = $Productos->updateProducto($idProducto,$tituloProducto,$informacionProducto,$precioProducto,$envioProducto,$estadoProducto,$imgProducto);
    header('Location: '.$baseurl.'administrador/producto/lista');
}

if($action=='borrarproducto'){
    
    $Productos = new Productos();
    
    //variables
    $id_producto=$id;
   
    $producto = $Productos->getProductoXId($id_producto);

    if($producto!=null){
        include($appViews.'template/header.php');
        include($appViews.'producto/producto_eli.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='deleteproducto'){

    // cargamos modelos
    $Productos= new Productos();

    $id_producto = $_POST['idProducto'];    
    
    $Productos= $Productos->deleteProducto($id_producto);
    header('Location: '.$baseurl.'administrador/producto/lista');
}

?>
