<?php

class Testimonios{
    
function getTestimonio(){
                $Query="SELECT * FROM testimonios";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	}

function getTestimonioXId($id_testimonio){
                $Query="SELECT * FROM testimonios WHERE id_testimonio= '".$id_testimonio."'";
		//die ($Query);
		$res=mysql_query($Query);
		if(mysql_num_rows($res)>0){
		$testify = mysql_fetch_array($res);
		return $testify ;
                    }else{
                            return null;
                    }                               
	}         
        
function AddTestimonio($contenidoTestimonio, $imgTestimonio, $videoTestimonio, $clienteTestimonio){
     $Query = "INSERT INTO testimonios (contenido_testimonio, img_testimonio, video_testimonio, cliente_testimonio) VALUES ('".$contenidoTestimonio."', '". $imgTestimonio."', '".$videoTestimonio."', '".$clienteTestimonio."')";
     //die($Query);                
     $res = mysql_query($Query);       
     return $res;
        }
    
function updateTestimonio($id_testimonio,$contenido_testimonio,$video_testimonio,$cliente_testimonio){
    $query = "UPDATE testimonios SET contenido_testimonio = '".$contenido_testimonio."', video_testimonio = '".$video_testimonio."', cliente_testimonio = '".$cliente_testimonio."' WHERE  id_testimonio ='".$id_testimonio."'";
    //die($query);
    $result=mysql_query($query);
    return $result;
	} 
        
function deleteTestimonio($id_testimonio) {
    $sql_delete="DELETE FROM testimonios WHERE id_testimonio='".$id_testimonio."' ";
    $res=mysql_query($sql_delete);
    return $res;
    }
 
}

?>
