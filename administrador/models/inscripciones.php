<?php

class Inscripciones{

 function getAlumno($identificacion){               
                $Query="SELECT * FROM inscripciones WHERE identificacion_alumno= '".$identificacion."'";
		//die ($Query);
                $res=mysql_query($Query);
		return $res;                  
	} 
        
  function getIdentificacion($identificacion){
                $Query="SELECT * FROM inscripciones WHERE identificacion_alumno= '".$identificacion."'";
		//die ($Query);
		$res=mysql_query($Query);
		if(mysql_num_rows($res)>0){
		$user = mysql_fetch_array($res);
		return $user;
                    }else{
                            return null;
                    }                    
	}
        
  function getTelefono($telefono){
                $Query="SELECT * FROM inscripciones WHERE telefono_alumno= '".$telefono."'";
		//die ($Query);
		$res=mysql_query($Query);
		if(mysql_num_rows($res)>0){
		$user = mysql_fetch_array($res);
		return $user;
                    }else{
                            return null;
                    }                    
	} 
        
  function getCorreo($correo){
                $Query="SELECT * FROM inscripciones WHERE correo_alumno= '".$correo."'";
		//die ($Query);
		$res=mysql_query($Query);
		if(mysql_num_rows($res)>0){
		$user = mysql_fetch_array($res);
		return $user;
                    }else{
                            return null;
                    }                    
	}
        
   function getInscripcionXId($id_inscripcion){                
                $Query="SELECT * FROM inscripciones WHERE id_inscripcion= '".$id_inscripcion."'";
		//die ($Query);
		$res=mysql_query($Query);
		if(mysql_num_rows($res)>0){
		$activity = mysql_fetch_array($res);
		return $activity;
                    }else{
                            return null;
                    }                 
	}
        
   function getInscripciones(){
                $Query="SELECT * FROM inscripciones";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                    
	}
    
    
 function addInscripcionAlumno($nombreApellido,$identificacion,$telefono,$correo,$fechaInicio,$nombreActividad,$pago){
     $Query = "INSERT INTO inscripciones (nombre_apellido_alumno, identificacion_alumno, telefono_alumno, correo_alumno, fecha_inscripcion_alumno, curso, pago_alumno) VALUES ('".$nombreApellido."', '".$identificacion."', '".$telefono."', '".$correo."', '".$fechaInicio."', '".$nombreActividad."', '".$pago."')";
     //die($Query);                
     $res = mysql_query($Query);   
     return $res;
 }
     
 function updateInscripcionAlumno($id_inscripcion,$nombre_apellido,$numero_identificacion,$telefono_alumno,$correo_alumno,$fecha_inscripcion,$curso, $pago){
    $query = "UPDATE inscripciones SET nombre_apellido_alumno = '".$nombre_apellido."', identificacion_alumno= '".$numero_identificacion."' , telefono_alumno= '".$telefono_alumno."', correo_alumno = '".$correo_alumno."', fecha_inscripcion_alumno = '".$fecha_inscripcion."', curso = '".$curso."', pago_alumno = '".$pago."' WHERE  id_inscripcion='".$id_inscripcion."'";
    //die($query);
    $result=mysql_query($query);
    return $result;
	}
        
 function deleteInscripcionAlumno($id_inscripcion) {
    $sql_delete="DELETE FROM inscripciones WHERE id_inscripcion='".$id_inscripcion."' ";
    $res=mysql_query($sql_delete);
    return $res;
    }
    
}
?>
