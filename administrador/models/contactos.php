<?php

class Contactos{
  
  function get(){
                $Query="SELECT * FROM contactos";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	}
        
  function getXId($id_contacto){
                 $Query="SELECT * FROM contactos WHERE id_contacto= '".$id_contacto."'";
		//die ($Query);
		$res=mysql_query($Query);
		if(mysql_num_rows($res)>0){
		$contacts = mysql_fetch_array($res);
		return $contacts;
                    }else{
                            return null;
                    }                               
	}
        
  function update($id_contacto,$atencion_contacto,$direccion_contacto,$mapa_contacto,$telefono_empresa){
    $query = "UPDATE contactos SET atencion_contacto = '".$atencion_contacto."', direccion_contacto = '".$direccion_contacto."', map_contacto = '".$mapa_contacto."', telefono_empresa = '".$telefono_empresa."' WHERE  id_contacto ='".$id_contacto."'";
    //die($query);
    $result=mysql_query($query);
    return $result;
	} 
}
?>