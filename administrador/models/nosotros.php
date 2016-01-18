<?php

class Nosotros{
  
  function getNosotros(){
                $Query="SELECT * FROM nosotros";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	}
}
?>
