<?php

if($action=='/' or $action==''){
	$action = '/index';
}

if($action=='/index'){


	$Sliders = new Sliders();
	$slidersList = $Sliders->getAllSliders();

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

//para actualizar el slider
if($action=='/updslider'){
	//modelos
	$Uploads = new Uploads();
	$Sliders = new Sliders();

	$Uploads->addtime = 1;

	// subimos imagenes
	$resultImgGrande = $Uploads->doUpload('imagen_grande','../images/sliders/');
	$resultImgPreview = $Uploads->doUpload('imagen_preview','../images/sliders/');


	$sliderdata = array();
	$sliderdata['id_slider'] = $_POST['id_slider'];
	$sliderdata['nombre_slider'] = $_POST['nombre_slider'];
	$sliderdata['enlace_slider'] = $_POST['enlace_slider'];
	$sliderdata['orden_slider'] = $_POST['orden_slider'];
	$sliderdata['activo'] = $_POST['activo'];
	$sliderdata['preview_slider'] = $_POST['imagen_preview_input'];
	$sliderdata['imagen_slider'] = $_POST['imagen_grande_input'];

	//subimos las imagenes
	if($resultImgPreview['status']==1){
		$sliderdata['preview_slider'] = 'images/sliders/'.$resultImgPreview['filename'];
	}
	if($resultImgGrande['status']==1){
		$sliderdata['imagen_slider'] = 'images/sliders/'.$resultImgGrande['filename'];
	}

	$Sliders->updateSlider($sliderdata);
	header('Location: '.$baseurl.'administrador/slider');


}

//para actualizar el orden de los sliders
if($action=='/updorden'){
	// plantilla para agregar
	$Sliders = new Sliders();
	//print_r($_POST['orden']);
	//actualizamos cada uno
	foreach($_POST['orden'] as $slider_id=>$slider_orden){
		$Sliders->updateOrden($slider_id,$slider_orden);
	}

	header('Location: '.$baseurl.'administrador/slider');

}


// tomar encuenta
$explo = explode('/', $action);
$action = $explo[1];
$id = $explo[2];


if($action=='editar'){
	// plantilla para agregar
	$Sliders = new Sliders();
	$slider = $Sliders->getSlider($id);

	include($appViews.'template/header.php');
	include($appViews.'sliders/editar_sliders.php');
	include($appViews.'template/footer.php');
	
}


?>