<?php
if($action =='' or $action =='/'){
	$action = '/lista';
}

//metodos
if($action=='/lista'){
	// variables
	// todo es correcto savamos sessiones
	include($appViews.'template/header.php');
        include($appViews.'actividad/actividad_actividades.php');
        include($appViews.'template/footer.php');
}

//metodos
if($action=='/agregaractividad'){
	// variables
	// todo es correcto savamos sessiones
	include($appViews.'template/header.php');
        include($appViews.'actividad/actividad_agr.php');
        include($appViews.'template/footer.php');
}

if($action=='/addactividad'){
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['nombreActividad']) and strlen(trim($_POST['nombreActividad']))>=3){
		$nombreActividad = $_POST['nombreActividad'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['nombreActividad']) and strlen(trim($_POST['nombreActividad']))>=3){
		$nombreActividad = $_POST['nombreActividad'];
                $nombreActividadGuion= str_replace(" ", "-", $nombreActividad);
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['costoActividad']) and strlen(trim($_POST['costoActividad']))>=3){
		$costoActividad = $_POST['costoActividad'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['contenidoActividad']) and strlen(trim($_POST['contenidoActividad']))>=3){
		$contenidoActividad = $_POST['contenidoActividad'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['tipoActividad']) and strlen(trim($_POST['tipoActividad']))>=3){
		$tipoActividad = $_POST['tipoActividad'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['fechaInicio']) and strlen(trim($_POST['fechaInicio']))>=3){
		$fechaInicio= $_POST['fechaInicio'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['fechaFin']) and strlen(trim($_POST['fechaFin']))>=3){
		$fechaFin= $_POST['fechaFin'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['fechaActividad']) and strlen(trim($_POST['fechaActividad']))>=3){
		$fechaActividad = $_POST['fechaActividad'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['estadoActividad']) and strlen(trim($_POST['estadoActividad']))>=1){
		$estadoActividad = $_POST['estadoActividad']; 
    }else{
		$errors[] = 'Error';
    }

    // cargamos classe para subir archivos y definimos que nos agregue el tiempo al final 
    //(para evitar que existan archivos duplicadas y no nos rompa el proceso)
    $Uploads = new Uploads();
    $Uploads->addtime = 1;

    /////////////////////////////////////
    // cargamos la imagen
    $archivoResultado = $Uploads->doUpload('fileToUpload','../images/'); // el primero corresponde a que $_FILES['fileToUpload'] y el segundo a la ruta de subida
    
    if($archivoResultado['status']==1){
        // la subida es correcta
        $imgActividad = $archivoResultado['filename'];
    }else{
        $errors[] = 'Error en subida de archivo/ talvez no se subio';
    }
    
    //////////////////////////////////////
    // cargamos la imagen Thumbnail
    $archivoResultadoThumbnail = $Uploads->doUpload('fileToUploadThumbnail','../images/'); // el primero corresponde a que $_FILES['fileToUpload'] y el segundo a la ruta de subida
    
    if($archivoResultadoThumbnail['status']==1){
        // la subida es correcta
        $imgThumbnail = $archivoResultadoThumbnail['filename'];
    }else{
        $errors[] = 'Error en subida de archivo/ talvez no se subio';
    }
    
    ////////////////////////////////////////////////////////////////////////////////////
    if(sizeof($errors)==0){ 
        $objActividad = new Actividades();
       
        $res = $objActividad->AddActividad($_POST['nombreActividad'], $_POST['costoActividad'], $_POST['contenidoActividad'], $imgActividad, $imgThumbnail, $_POST['tipoActividad'], $_POST['fechaActividad'], $_POST['fechaInicio'], $_POST['fechaFin'], $_POST['estadoActividad'], $nombreActividadGuion);
        header('Location: '.$baseurl.'administrador/actividad/lista');
    }else{
        header('Location: '.$baseurl.'administrador');
    }
   
}// fin de metodo

//metodo para separar el action y acciones
// poner mucha atencion
$explo = explode('/', $action);
$action = $explo[1];
$id = $explo[2];

if($action=='editaractividad'){
    
    $Actividades = new Actividades();
    
    //variables
    $id_actividad=$id;
   
    $actividad = $Actividades->getActividadXId($id_actividad);

    if($actividad!=null){
        include($appViews.'template/header.php');
        include($appViews.'actividad/actividad_mod.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='updateactividad'){

    // cargamos modelos
    $Actividades = new Actividades();

    //variables
    $datauser = array();
    $id_actividad = $_POST['idActividad'];
    $nombre_actividad = $_POST['nombreActividad'];
    $costo_actividad = $_POST['costoActividad'];
    $contenido_actividad = $_POST['contenidoActividad'];
    $tipo_actividad = $_POST['tipoActividad'];
    $fecha_actividad = $_POST['fechaActividad'];
    $fecha_inicio_actividad = $_POST['fechaInicio'];
    $fecha_fin_actividad = $_POST['fechaFin'];
    $estado_actividad = $_POST['estadoActividad'];
    
    // cargamos classe para subir archivos y definimos que nos agregue el tiempo al final 
    //(para evitar que existan archivos duplicadas y no nos rompa el proceso)
    $Uploads = new Uploads();
    $Uploads->addtime = 1;
    
    /////////////////////////////////////
    // cargamos la imagen
    $archivoResultado = $Uploads->doUpload('fileToUpload','../images/'); // el primero corresponde a que $_FILES['fileToUpload'] y el segundo a la ruta de subida
    
    if($archivoResultado['status']==1){
        // la subida es correcta
        $imgActividad = $archivoResultado['filename'];
    }else{
        $errors[] = 'Error en subida de archivo/ talvez no se subio';
    }
    
    //////////////////////////////////////
    // cargamos la imagen Thumbnail
    $archivoResultadoThumbnail = $Uploads->doUpload('fileToUploadThumbnail','../images/'); // el primero corresponde a que $_FILES['fileToUpload'] y el segundo a la ruta de subida
    
    if($archivoResultadoThumbnail['status']==1){
        // la subida es correcta
        $imgThumbnail = $archivoResultadoThumbnail ['filename'];
    }else{
        $errors[] = 'Error en subida de archivo/ talvez no se subio';
    }
    
    $Actividades = $Actividades->updateActividad($id_actividad,$nombre_actividad,$costo_actividad,$costo_actividad,$contenido_actividad,$imgActividad,$imgThumbnail,$tipo_actividad,$fecha_actividad,$fecha_inicio_actividad,$fecha_fin_actividad,$estado_actividad);
    header('Location: '.$baseurl.'administrador/actividad/lista');
}

if($action=='borraractividad'){
    
    $Actividades = new Actividades();
    
    //variables
    $id_actividad=$id;
   
    $actividad = $Actividades->getActividadXId($id_actividad);

    if($actividad!=null){
        include($appViews.'template/header.php');
        include($appViews.'actividad/actividad_eli.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='deleteactividad'){

    // cargamos modelos
    $Actividades = new Actividades();

    $id_actividad = $_POST['idActividad'];    
    
    $Actividades = $Actividades->deleteActividad($id_actividad);
    header('Location: '.$baseurl.'administrador/actividad/lista');
}

?>