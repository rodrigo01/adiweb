<div class="container">
	<h3>Eliminar Producto</h3>
	<form action="<?php echo $baseurl;?>administrador/producto/deleteproducto" method="POST">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Titulo de Producto</div>		
			<div class="col-md-4"><?php echo $producto['titulo_producto']; ?></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Informacion de Producto</div>
			<div class="col-md-4"><?php echo $producto['info_producto']; ?></div>
		</div>		
                </div><div class="form-group"><div class="row">			
			<div class="col-md-4"> <input type="hidden" name="idProducto" class="form-control" value="<?php echo $producto['id_producto']; ?>" required/></div>
		</div>                    
		<div>
                    <input type="submit" class="btn btn-success" value="Eliminar" class="btn btn-succcess" name="eli_administrador"/>
		</div>
	</form>
</div>
</div>
