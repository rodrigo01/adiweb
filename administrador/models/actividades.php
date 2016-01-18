<?php

class Actividades{

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