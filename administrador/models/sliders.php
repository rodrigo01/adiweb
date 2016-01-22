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

	function addSlider($slider){
		$sqlAdd = "INSERT INTO `livehost_adiweb`.`sliders` (`id_slider`, `nombre_slider`, `imagen_slider`, `preview_slider`, `enlace_slider`, `orden_slider`, `activo`) 
		VALUES (NULL, '".$slider['nombre_slider']."', '".$slider['imagen_slider']."', '".$slider['preview_slider']."', '".$slider['enlace_slider']."', '".$slider['orden_slider']."', '".$slider['activo']."');";
		$resAdd = mysql_query($sqlAdd);
		return mysql_insert_id();
	}
}

?>