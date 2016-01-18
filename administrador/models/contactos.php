<?php

class Contactos{
  
  function getContactos(){
                $Query="SELECT * FROM contactos";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	}
}
?>