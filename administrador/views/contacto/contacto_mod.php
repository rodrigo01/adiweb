<div class="container">
<h3>Modificar Parametros de Seccion de Contacto</h3>
	<form action="<?php echo $baseurl;?>administrador/contacto/updatecontacto" method="POST" enctype="multipart/form-data">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Atencion del Contacto</div>
                        <div class="col-md-4"> <textarea class="form-control" name="atencionContacto" id=""><?php echo $contacto['atencion_contacto'] ?></textarea></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Direccion del Contacto</div>
                        <div class="col-md-4"> <textarea class="form-control" name="direccionContacto" id=""><?php echo $contacto['direccion_contacto'] ?></textarea></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Mapa del Contacto</div>		
			<div class="col-md-4"> <input type="text" value="<?php echo $contacto['map_contacto'] ?>" name="mapaContacto" class="form-control" required/><input type="hidden" value="<?php echo $contacto['id_contacto'] ?>" name="idContacto" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Telefono de Empresa</div>		
			<div class="col-md-4"> <input type="text" value="<?php echo $contacto['telefono_empresa'] ?>" name="telefonoEmpresa" class="form-control" required/></div>
		</div>
		</div>
		<div>
			<input type="submit" class="btn btn-success" value="Modificar" class="btn btn-succcess" name="submit"/>
		</div>
	</form>
</div>
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
