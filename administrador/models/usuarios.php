<?php 
class Usuarios{

	function getUser($username,$pass){
		$sqlUser = "SELECT * FROM `usuarios` WHERE `user_usuario` LIKE '".$username."' AND `pass_usuario` LIKE '".$pass."'";
		$resUser = mysql_query($sqlUser);

		if(mysql_num_rows($resUser)>0){
			$user = mysql_fetch_array($resUser);
			return $user;
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