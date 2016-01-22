<?php

if($action =='' or $action =='/'){
	$action = '/lista';
}

//metodos
if($action=='/lista'){
	// variables
	// todo es correcto savamos sessiones
	include($appViews.'template/header.php');
        include($appViews.'nosotros/nosotros.php');
        include($appViews.'template/footer.php');
}

//metodo para separar el action y acciones
// poner mucha atencion
$explo = explode('/', $action);
$action = $explo[1];
$id = $explo[2];

if($action=='editarnosotros'){
    
    $Nosotros= new Nosotros();
    
    //variables
    $id_nosotros=$id;
   
    $nosotros = $Nosotros->getNosotrosXId($id_nosotros);

    if($nosotros!=null){
        include($appViews.'template/header.php');
        include($appViews.'nosotros/nosotros_mod.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='updatenosotros'){

    // cargamos modelos
    $Nosotros = new Nosotros();

    $id_nosotros = $_POST['idNosotros'];
    $quienes_somos_nosotros = $_POST['quienesSomosNosotros'];
    $contenido_quienes_somos = $_POST['contenidoQuienesSomos'];
    $titulo_servicios_nosotros = $_POST['tituloServiciosNosotros'];
    $contenido_servicios_nosotros = $_POST['contenidoServiciosNosotros'];
    $titulo_mision_nosotros = $_POST['tituloMisionNosotros'];
    $mision_nosotros = $_POST['misionNosotros'];
   
    $Nosotros = $Nosotros->updateNosotros($id_nosotros,$quienes_somos_nosotros,$contenido_quienes_somos,$titulo_servicios_nosotros,$contenido_servicios_nosotros,$mision_nosotros,$titulo_mision_nosotros);
    header('Location: '.$baseurl.'administrador/nosotros/lista');
}

?>
