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
	$Uploads = new Uploads();
	print_r($_POST);

	$Uploads->doUpload('imagen_grande','../images/sliders/');
}

//para actualizar el orden de los sliders
if($action=='/updorden'){
	// plantilla para agregar
	print_r($_POST);
}


?>