	<h3>Agregar Testimonio</h3>
	<form action="<?php echo $baseurl;?>administrador/testimonio/addtestimonio" method="POST" enctype="multipart/form-data">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Contenido del Testimonio</div>
                        <div class="col-md-4"> <textarea class="form-control" name="contenidoTestimonio" id=""></textarea></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Subir Imagen</div>
			<div class="col-md-4">  <input type="file" name="fileToUpload" id="fileToUpload" required></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Video de Testimonio</div>		
			<div class="col-md-4"> <input type="text" name="videoTestimonio" value="Ej:https://www.youtube.com/embed/Y9agP0hGyH8" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Nombre y Apellido</div>		
			<div class="col-md-4"> <input type="text" name="clienteTestimonio" class="form-control" required/></div>
		</div>
		</div>
		<div>
			<input type="submit" class="btn btn-success" value="Agregar" class="btn btn-succcess" name="submit"/>
		</div>
	</form>
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						