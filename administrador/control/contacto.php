<?php

if($action =='' or $action =='/'){
	$action = '/lista';
}

//metodos
if($action=='/lista'){
	// variables
	// todo es correcto savamos sessiones
	include($appViews.'template/header.php');
        include($appViews.'contacto/contacto_contactos.php');
        include($appViews.'template/footer.php');
}

//metodo para separar el action y acciones
// poner mucha atencion
$explo = explode('/', $action);
$action = $explo[1];
$id = $explo[2];

if($action=='editarcontacto'){
    
    $Contactos= new Contactos();
    
    //variables
    $id_contacto=$id;
   
    $contacto = $Contactos->getXId($id_contacto);

    if($contacto!=null){
        include($appViews.'template/header.php');
        include($appViews.'contacto/contacto_mod.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='updatecontacto'){

    // cargamos modelos
    $Contactos = new Contactos();

    $id_contacto = $_POST['idContacto'];
    $atencion_contacto = $_POST['atencionContacto'];
    $direccion_contacto = $_POST['direccionContacto'];
    $mapa_contacto = $_POST['mapaContacto'];
    $telefono_empresa = $_POST['telefonoEmpresa'];
   
    $Contactos = $Contactos->update($id_contacto,$atencion_contacto,$direccion_contacto,$mapa_contacto,$telefono_empresa);
    header('Location: '.$baseurl.'administrador/contacto/lista');
}

?>
