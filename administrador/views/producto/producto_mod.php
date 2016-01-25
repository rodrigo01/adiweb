	<h3>Modificar Producto</h3>
	<form action="<?php echo $baseurl;?>administrador/producto/updateproducto" method="POST" enctype="multipart/form-data">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Titulo del Producto</div>		
			<div class="col-md-4"> <input type="text" name="tituloProducto" value="<?php echo $producto['titulo_producto'] ?>" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Informacion del Producto</div>
                        <div class="col-md-4"> <textarea class="form-control" id="area1" name="informacionProducto"><?php echo $producto['info_producto'] ?></textarea></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">HTML de Boton de Compra</div>
                        <div class="col-md-4"> <textarea class="form-control" name="botonCompra"><?php echo $producto['boton_producto'] ?></textarea></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Precio del Producto</div>		
			<div class="col-md-4"> <input type="text" name="precioProducto" value="<?php echo $producto['precio_producto'] ?>" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Envio del Producto</div>		
			<div class="col-md-4"> <input type="text" name="envioProducto" value="<?php echo $producto['envio_producto'] ?>" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Estado del Producto</div>
			<div class="col-md-4"> 
                            <select name="estadoProducto" class="form-control" id="" required>
                                <option value="">Seleccionar..</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Subir Imagen</div>
			<div class="col-md-4">  <input type="file" name="fileToUpload" id="fileToUpload" required></div>
		</div>
		</div>
                <input type="hidden" name="idProducto" value="<?php echo $producto['id_producto'] ?>" class="form-control" required/>
		<div>
			<input type="submit" class="btn btn-success" value="Modificar" class="btn btn-succcess" name="submit"/>
		</div>
	</form>
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(function() {
            new nicEditor().panelInstance('area1');            
        });
        </script>

