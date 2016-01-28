<?php

class Actividades{
    
 function AddActividad($nombreActividad,$costoActividad,$contenidoActividad,$imgActividad,$imgThumbnail,$tipoActividad,$fechaActividad,$fechaInicio,$fechaFin,$estadoActividad,$nombreActividadGuion){
     $Query = "INSERT INTO actividades (nombre_actividad, costo_actividad, contenido_actividad, img_actividad, thumbnail_actividad ,tipo_actividad, fecha_actividad, fecha_inicio_actividad, fecha_fin_actividad, estado_actividad, seccion_actividad) VALUES ('".$nombreActividad."', '".$costoActividad."', '".$contenidoActividad."', '".$imgActividad."', '".$imgThumbnail."','".$tipoActividad."', '".$fechaActividad."', '".$fechaInicio."', '".$fechaFin."', '".$estadoActividad."', '".$nombreActividadGuion."')";
     //die($Query);                
     $res = mysql_query($Query);       
     return $res;
 }
 
 function updateActividad($id_actividad,$nombre_actividad,$costo_actividad,$costo_actividad,$contenido_actividad,$imgActividad,$imgThumbnail,$tipo_actividad,$fecha_actividad,$fecha_inicio_actividad,$fecha_fin_actividad,$estado_actividad){
    $query = "UPDATE actividades SET nombre_actividad = '".$nombre_actividad."', costo_actividad = '".$costo_actividad."', contenido_actividad = '".$contenido_actividad."', img_actividad = '".$imgActividad."', thumbnail_actividad = '".$imgThumbnail."', tipo_actividad = '".$tipo_actividad."', fecha_actividad = '".$fecha_actividad."', fecha_inicio_actividad = '".$fecha_inicio_actividad."', fecha_fin_actividad = '".$fecha_fin_actividad."', estado_actividad = '".$estado_actividad."' WHERE  id_actividad='".$id_actividad."'";
    //die($query);
    $result=mysql_query($query);
    return $result;
	}
        
 function deleteActividad($id_actividad) {
    $sql_delete="DELETE FROM actividades WHERE id_actividad='".$id_actividad."' ";
    $res=mysql_query($sql_delete);
    return $res;
    }

 function getActividadXId($id_actividad){
                $Query="SELECT * FROM actividades WHERE id_actividad= '".$id_actividad."'";
		//die ($Query);
		$res=mysql_query($Query);
		if(mysql_num_rows($res)>0){
		$activity = mysql_fetch_array($res);
		return $activity;
                    }else{
                            return null;
                    }                               
	}  
        
 function getActividadXSeccion($seccion_actividad){
                $Query="SELECT * FROM actividades WHERE seccion_actividad= '".$seccion_actividad."'";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	} 
        
 function getActividadXNombre($nombre_actividad){
                $Query="SELECT * FROM actividades WHERE nombre_actividad= '".$nombre_actividad."'";
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