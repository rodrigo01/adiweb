<?php

class Nosotros{
  
  function getNosotros(){
                $Query="SELECT * FROM nosotros";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	}
        
   function getNosotrosXId($id_nosotros){
                 $Query="SELECT * FROM nosotros WHERE id_nosotros= '".$id_nosotros."'";
		//die ($Query);
		$res=mysql_query($Query);
		if(mysql_num_rows($res)>0){
		$us = mysql_fetch_array($res);
		return $us;
                    }else{
                            return null;
                    }                               
	}
        
   function updateNosotros($id_nosotros,$quienes_somos_nosotros,$contenido_quienes_somos,$titulo_servicios_nosotros,$contenido_servicios_nosotros,$mision_nosotros,$titulo_mision_nosotros){
    $query = "UPDATE nosotros SET quienes_somos_nosotros = '".$quienes_somos_nosotros."', contenido_quienes_somos = '".$contenido_quienes_somos."' ,titulo_servicios_nosotros = '".$titulo_servicios_nosotros."', contenido_servicios_nosotros = '".$contenido_servicios_nosotros."', mision_nosotros = '".$mision_nosotros."', titulo_mision_nosotros = '".$titulo_mision_nosotros."' WHERE  id_nosotros ='".$id_nosotros."'";
    //die($query);
    $result=mysql_query($query);
    return $result;
	} 
}
?>
