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
if($action=='/agregar'){
	// plantilla para agregar
	include($appViews.'template/header.php');
	include($appViews.'sliders/agregar_sliders.php');
	include($appViews.'template/footer.php');
}

// metodo para guardar en base de datos un slider
if($action=='/addslider'){
	//modelos
	$Uploads = new Uploads();
	$Sliders = new Sliders();

	$Uploads->addtime = 1;

	// subimos imagenes
	$resultImgGrande = $Uploads->doUpload('imagen_grande','../images/sliders/');
	$resultImgPreview = $Uploads->doUpload('imagen_preview','../images/sliders/');


	if($resultImgPreview['status']==1 and $resultImgGrande['status']==1){
		// la subida es correcta
		// preparamos datos de insersion
		$sliderdata = array();
		$sliderdata['nombre_slider'] = $_POST['nombre_slider'];
		$sliderdata['enlace_slider'] = $_POST['enlace_slider'];
		$sliderdata['orden_slider'] = $_POST['orden_slider'];
		$sliderdata['imagen_slider'] = 'images/sliders/'.$resultImgGrande['filename'];
		$sliderdata['preview_slider'] = 'images/sliders/'.$resultImgPreview['filename'];
		$sliderdata['activo'] = $_POST['activo'];

		$Sliders->addSlider($sliderdata);
		header('Location: '.$baseurl.'administrador/slider');
	}else{
		header('Location: '.$baseurl.'administrador/slider?error='.$resultImgGrande['message']);
	}

	
}

//para actualizar el orden de los sliders
if($action=='/updorden'){
	// plantilla para agregar
	print_r($_POST);
}


?>