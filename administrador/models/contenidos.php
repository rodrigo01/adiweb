<?php 
class Contenidos{

	function getContenido($area){
		$sqlContenido = "SELECT * FROM `contenido` WHERE `area_contenido` LIKE '".$area."'";
		//echo $sqlContenido;
		$resContenido = mysql_query($sqlContenido);

		if(mysql_num_rows($resContenido)>0){
			$Contenido = mysql_fetch_array($resContenido);
			return $Contenido['code_contenido'];
		}else{
			return '';
		}
	}

}

?>