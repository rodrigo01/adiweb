<?php

class Actividades{
    
 function AddActividad($nombreActividad,$costoActividad,$contenidoActividad,$imgActividad,$tipoActividad,$fechaActividad,$fechaInicio,$fechaFin,$estadoActividad,$nombreActividad){
     $Query = "INSERT INTO actividades (nombre_actividad, costo_actividad, contenido_actividad, img_actividad, tipo_actividad, fecha_actividad, fecha_inicio_actividad, fecha_fin_actividad, estado_actividad, seccion_actividad) VALUES ('".$nombreActividad."', '".$costoActividad."', '".$contenidoActividad."', '".$imgActividad."', '".$tipoActividad."', '".$fechaActividad."', '".$fechaInicio."', '".$fechaFin."', '".$estadoActividad."', '".$nombreActividad."')";
     //die($Query);                
     $res = mysql_query($Query);       
     return $res;
 }

 function getActividadXId($id_actividad){
                $Query="SELECT * FROM actividades WHERE id_actividad= '".$id_actividad."'";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	}  
        
 function getActividadXSeccion($seccion_actividad){
                $Query="SELECT * FROM actividades WHERE seccion_actividad= '".$seccion_actividad."'";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	} 
        
    
 function getActividadXTipo($tipo_actividad){
                $Query="SELECT * FROM actividades WHERE tipo_actividad= '".$tipo_actividad."'";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	}
  
  function getActividad(){
                $Query="SELECT * FROM actividades INNER JOIN calendarios WHERE actividades.id_actividad=calendarios.id_actividad";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	}
  
  function getActividadOnly(){
      $Query="SELECT * FROM actividades";
      //die ($Query);
      $res=mysql_query($Query);
      return $res; 
  }
}
?>