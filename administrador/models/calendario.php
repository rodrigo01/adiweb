<?php

class Calendarios{

  public function getCalendario($args = array()){
    $sqlActividades = "SELECT * FROM `calendarios` JOIN actividades on actividades.id_actividad = calendarios.id_actividad ORDER BY `fecha_calendario` ASC";
    $resActividades = mysql_query($sqlActividades);
    if(mysql_num_rows($resActividades)>0){
      return $resActividades;
    }
    else{
      return null;
    }
  }


}
?>