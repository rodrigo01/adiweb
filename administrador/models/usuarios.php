<?php 
class Usuarios{
        
        function getUserGeneral(){
		$Query="SELECT * FROM usuarios";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;
	}
    
    
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

    function getUserOnly($usuario){
                $Query="SELECT * FROM usuarios WHERE user_usuario= '".$usuario."'";
		//die ($Query);
		$res=mysql_query($Query);
		if(mysql_num_rows($res)>0){
		$user = mysql_fetch_array($res);
		return $user;
                    }else{
                            return null;
                    }                    
	}
        
        function getUserXId($id_usuario){
                    $Query="SELECT * FROM usuarios WHERE id_usuario = '".$id_usuario."'";
			//die ($Query);
			$res=mysql_query($Query);
			if(mysql_num_rows($res)>0){
			$user = mysql_fetch_array($res);
			return $user;
                        }else{
                                return null;
                        }                    
	}
        
        function addUser($usuario,$clave,$email,$nombre)
	{      
                $Query = "INSERT INTO usuarios (user_usuario, pass_usuario, correo_usuario, nombre_usuario) VALUES ('".$usuario."', '".$clave."', '".$email."', '".$nombre."')";
		//die($Query);                
		$res = mysql_query($Query);       
		return $res;
	}

	function updateUser($datauser){
		$sqlUpdate = "UPDATE `livehost_adiweb`.`usuarios` SET `user_usuario` = '".$datauser['user_usuario']."', `pass_usuario` = '".$datauser['pass_usuario']."', `correo_usuario` = '".$datauser['correo_usuario']."', `nombre_usuario` = '".$datauser['nombre_usuario']."' WHERE `usuarios`.`id_usuario` = ".$datauser['id_usuario'].";";
		mysql_query($sqlUpdate);
	}
        
        function deleteUser($id_usuario) {
            $sql_delete="DELETE FROM usuarios WHERE id_usuario='".$id_usuario."' ";
            $res=mysql_query($sql_delete);
            return $res;
        }
}

?>