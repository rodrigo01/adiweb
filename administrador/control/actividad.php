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
    
    if(sizeof($errors)==0){ 
        $objActividad=new Actividades();
        $res=$objActividad->getActividadXSeccion($_POST['nombreActividad']);
        $seccion_actividad = $datos['seccion_actividad'];
        if($seccion_actividad==null){          
        
             //IMAGEN////////////////////
        $target_dir = $baseurl."images/";
        $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $res=$objActividad->AddActividad($_POST['nombreActividad'], $_POST['costoActividad'], $_POST['contenidoActividad'], $_POST['imgActividad'], $_POST['tipoActividad'], $_POST['fechaActividad'], $_POST['fechaInicio'], $_POST['fechaFin'], $_POST['estadoActividad'], $_POST['nombreActividad']);
    ///////////////////////////
      header('Location: '.$baseurl.'administrador');  
    }else{
        header('Location: '.$baseurl.'administrador');
    }
  }
   header('Location: '.$baseurl.'administrador');
}
?>
