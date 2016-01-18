<?php

class Testimonios{
function getTestimonio(){
                $Query="SELECT * FROM testimonios";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	}
}
?>
