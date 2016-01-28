<?php
if($action =='' or $action =='/'){
	$action = '/lista';
}

//metodos
if($action=='/lista'){
	// variables
	// todo es correcto savamos sessiones
	include($appViews.'template/header.php');
        include($appViews.'inscripcion/inscripcion_inscripciones.php');
        include($appViews.'template/footer.php');
}

//metodos
if($action=='/agregarinscripcion'){
	// variables
	// todo es correcto savamos sessiones
	include($appViews.'template/header.php');
        include($appViews.'inscripcion/inscripcion_agr.php');
        include($appViews.'template/footer.php');
}

if($action=='/addinscripcionalumno'){
	//////////////////////////////////////////////////////////////
    if(isset($_POST['nombreApellido']) and strlen(trim($_POST['nombreApellido']))>=3){
		$nombreApellido = $_POST['nombreApellido'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['identificacion']) and strlen(trim($_POST['identificacion']))>=3){
		$identificacion = $_POST['identificacion'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['telefono']) and strlen(trim($_POST['telefono']))>=3){
		$telefono = $_POST['telefono'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['correo']) and strlen(trim($_POST['correo']))>=3){
		$correo = $_POST['correo'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['fechaInicio']) and strlen(trim($_POST['fechaInicio']))>=3){
		$fechaInicio = $_POST['fechaInicio'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['nombreActividad']) and strlen(trim($_POST['nombreActividad']))>=3){
                $nombreActividad = $_POST['nombreActividad'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['pago']) and strlen(trim($_POST['pago']))>=3){
		$pago = $_POST['pago'];
    }else{
		$errors[] = 'Error';
    }
    
    if(sizeof($errors)==0){       
        
        $objInscripcion = new Inscripciones();

	$identificacion = $objInscripcion->getIdentificacion($_POST['identificacion']); 
        $telefono = $objInscripcion->getTelefono($_POST['telefono']); 
        $correo= $objInscripcion->getCorreo($_POST['correo']);
        
        if($identificacion==null && $telefono==null && $correo==null){
             $res = $objInscripcion->addInscripcionAlumno($_POST['nombreApellido'], $_POST['identificacion'], $_POST['telefono'], $_POST['correo'], $_POST['fechaInicio'], $_POST['nombreActividad'], $_POST['pago']); 
             $to = 'g.blancarte@arturoarellano.com';
	     $subject = 'Contacto desde ArturoArellano.com';

	     $headers = "From: Pagina ArturoArellano<noreply@arturoarellano.com>\r\n";
	     $headers .= "MIME-Version: 1.0\r\n";
	     $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	     $message = "El siguiente alumno se ha registrado en el sistema";
	     $message .= "<br>Nombre y Apellido: ".$_POST['nombreApellido'];
	     $message .= "<br>Correo ".$_POST['correo'];
	     $message .= "<br>Telefono ".$_POST['telefono'];
             $message .= "<br>Ingrese por favor al siguiente enlace ".$baseurl."administrador/inscripcion/lista";
	     
	     mail($to, $subject, $message, $headers);
            ?>
            <script>                
                 alert('Usted ha sido registrado en el curso');   
                 document.location=('http://arturoarellano.com');
            </script>                                
        <?php 
        }else{             
            ?>
           <script>
            alert('Algun Dato ya se encuentra repetido. Presione Aceptar');
            document.location=('http://arturoarellano.com');
           </script>
        <?php 
        }    
    }else{
        header('Location: '.$baseurl);
    }	
}

//////////////////////////////////////
if($action=='/addinscripcionalumnoadministrador'){
	//////////////////////////////////////////////////////////////
    if(isset($_POST['nombreApellido']) and strlen(trim($_POST['nombreApellido']))>=3){
		$nombreApellido = $_POST['nombreApellido'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['identificacion']) and strlen(trim($_POST['identificacion']))>=3){
		$identificacion = $_POST['identificacion'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['telefono']) and strlen(trim($_POST['telefono']))>=3){
		$telefono = $_POST['telefono'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['correo']) and strlen(trim($_POST['correo']))>=3){
		$correo = $_POST['correo'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['fechaInicio']) and strlen(trim($_POST['fechaInicio']))>=3){
		$fechaInicio = $_POST['fechaInicio'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['nombreActividad']) and strlen(trim($_POST['nombreActividad']))>=3){
                $nombreActividad = $_POST['nombreActividad'];
    }else{
		$errors[] = 'Error';
    }
    
    //////////////////////////////////////////////////////////////
    if(isset($_POST['pago']) and strlen(trim($_POST['pago']))>=3){
		$pago = $_POST['pago'];
    }else{
		$errors[] = 'Error';
    }
    
    if(sizeof($errors)==0){       
        
        $objInscripcion = new Inscripciones();

	$identificacion = $objInscripcion->getIdentificacion($_POST['identificacion']); 
        $telefono = $objInscripcion->getTelefono($_POST['telefono']); 
        $correo= $objInscripcion->getCorreo($_POST['correo']);
        
        if($identificacion==null && $telefono==null && $correo==null){
             $res = $objInscripcion->addInscripcionAlumno($_POST['nombreApellido'], $_POST['identificacion'], $_POST['telefono'], $_POST['correo'], $_POST['fechaInicio'], $_POST['nombreActividad'], $_POST['pago']); 
              header('Location: '.$baseurl.'administrador/inscripcion/lista');
        }else{             
           header('Location: '.$baseurl.'administrador/inscripcion/lista');
        }    
    }else{
         header('Location: '.$baseurl.'administrador/');
    }	
}
/////////////////////////////////////

//metodo para separar el action y acciones
// poner mucha atencion
$explo = explode('/', $action);
$action = $explo[1];
$id = $explo[2];

if($action=='editarinscripcion'){
    
    $Inscripciones = new Inscripciones();
    
    //variables
    $id_inscripcion=$id;
   
    $inscripcion = $Inscripciones->getInscripcionXId($id_inscripcion);

    if($inscripcion!=null){
        include($appViews.'template/header.php');
        include($appViews.'inscripcion/inscripcion_mod.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='updateinscripcionalumno'){

    // cargamos modelos
    $Inscripciones = new Inscripciones();

    //variables
    $datauser = array();
    $id_inscripcion = $_POST['idInscripcion'];
    $nombre_apellido = $_POST['nombreApellido'];
    $numero_identificacion = $_POST['identificacion'];
    $telefono_alumno = $_POST['telefono'];
    $correo_alumno = $_POST['correo'];
    $fecha_inscripcion = $_POST['fechaInicio'];
    $curso = $_POST['nombreActividad'];
    $pago = $_POST['pago'];
    
    $res=$Inscripciones->updateInscripcionAlumno($id_inscripcion,$nombre_apellido,$numero_identificacion,$telefono_alumno,$correo_alumno,$fecha_inscripcion,$curso, $pago);
    header('Location: '.$baseurl.'administrador/inscripcion/lista');
}

if($action=='borrarinscripcion'){
    
    $Inscripciones= new Inscripciones();
    
    //variables
    $id_inscripcion=$id;
   
    $inscripcion = $Inscripciones->getInscripcionXId($id_inscripcion);

    if($inscripcion!=null){
        include($appViews.'template/header.php');
        include($appViews.'inscripcion/inscripcion_eli.php');
        include($appViews.'template/footer.php');
    }else{
        // no existe el usuario
        header('Location: '.$baseurl.'administrador?error=noexiste');
    }
}

if($action=='deleteinscripcion'){

    // cargamos modelos
    $Inscripciones= new Inscripciones();

    $id_inscripcion = $_POST['idInscripcion'];    
    
    $Inscripciones = $Inscripciones->deleteInscripcionAlumno($id_inscripcion);
    header('Location: '.$baseurl.'administrador/inscripcion/lista');
}

?>
