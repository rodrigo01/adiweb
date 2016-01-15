<?php 
class Sliders{

	function getSlider($id_slider){
		$sqlSlider = "SELECT * FROM `sliders` WHERE `id_slider` LIKE '".$id_slider."'";
		$resSlider = mysql_query($sqlSlider);

		if(mysql_num_rows($resSlider)>0){
			$Slider = mysql_fetch_array($resSlider);
			return $Slider;
		}else{
			return null;
		}
	}

	function getSliders(){
		$sqlSlider = "SELECT * FROM `sliders` ORDER BY `sliders`.`nombre_slider` ASC";
		$resSlider = mysql_query($sqlSlider);

		if(mysql_num_rows($resSlider)>0){
			return $resSlider;
		}else{
			return null;
		}
	}

	function addUser(){
		$sqlInsert = "INSERT INTO `livehost_adiweb`.`usuarios` (`id_usuario`, `user_usuario`, `pass_usuario`, `correo_usuario`, `nombre_usuario`) 
		VALUES (NULL, 'rodrigo01', 'dominio01', 'rodrigo01@gmail.com', 'Rodrigo Ornelas');";
	}
}

?>