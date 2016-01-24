<?php

class Productos{
    
function getProductos(){
                $Query="SELECT * FROM productos";
		//die ($Query);
		$res=mysql_query($Query);
		return $res;                  
	}
        
function getProductoXId($id_producto){
                $Query="SELECT * FROM productos WHERE id_producto= '".$id_producto."'";
		//die ($Query);
		$res=mysql_query($Query);
		if(mysql_num_rows($res)>0){
		$product = mysql_fetch_array($res);
		return $product;
                    }else{
                            return null;
                    }                               
	}
        
function addProducto($tituloProducto,$informacionProducto,$precioProducto,$envioProducto,$estadoProducto,$imgProducto){
     $Query = "INSERT INTO productos (titulo_producto, info_producto, precio_producto, envio_producto, estado_producto, imagen_producto) VALUES ('".$tituloProducto."', '".$informacionProducto."', '".$precioProducto."', '".$envioProducto."', '".$estadoProducto."', '".$imgProducto."')";
     //die($Query);                
     $res = mysql_query($Query);       
     return $res;
        }
 
function updateProducto($idProducto,$tituloProducto,$informacionProducto,$precioProducto,$envioProducto,$estadoProducto,$imgProducto){
    $query = "UPDATE productos SET titulo_producto = '".$tituloProducto."', info_producto = '".$informacionProducto."' ,precio_producto = '".$precioProducto."', envio_producto = '".$envioProducto."', estado_producto = '".$estadoProducto."', imagen_producto = '".$imgProducto."' WHERE  id_producto ='".$idProducto."'";
    //die($query);
    $result=mysql_query($query);
    return $result;
	} 
        
function deleteProducto($id_producto) {
    $sql_delete="DELETE FROM productos WHERE id_producto='".$id_producto."' ";
    $res=mysql_query($sql_delete);
    return $res;
    }
        
}

?>
