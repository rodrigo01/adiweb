<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
    webshims.setOptions('waitReady', false);
    webshims.setOptions('forms-ext', {types: 'date'});
    webshims.polyfill('forms forms-ext');    
</script>

<h3>Agregar Actividad</h3>
	<form action="<?php echo $baseurl;?>administrador/actividad/addactividad" method="POST" enctype="multipart/form-data">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Titulo de la Actividad</div>		
			<div class="col-md-4"> <input type="text" name="nombreActividad" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Costo de la Actividad</div>
			<div class="col-md-4"> <input type="text" name="costoActividad" class="form-control" id="correoUsuario" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Contenido de la Actividad</div>
                        <div class="col-md-4"> <textarea class="form-control" name="contenidoActividad" id=""></textarea></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Subir Imagen</div>
			<div class="col-md-4">  <input type="file" name="fileToUpload" id="fileToUpload" required></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Subir Imagen (Thumbnail)</div>
			<div class="col-md-4">  <input type="file" name="fileToUploadThumbnail" id="fileToUploadThumbnail" required></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Tipo de Actividad</div>
			<div class="col-md-4"> 
                            <select name="tipoActividad" class="form-control" id="" required>
                                <option value="">Seleccionar..</option>
                                <option value="curso">Curso</option>
                                <option value="taller">Taller</option>
                            </select>
                        </div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Fecha de Inicio de Actividad</div>
			<div class="col-md-4"> <input name="fechaInicio" value="<?php echo date("Y-m-d"); ?>" class="form-control" type="date" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Fecha de Fin de Actividad</div>
			<div class="col-md-4"> <input name="fechaFin" value="<?php echo date("Y-m-d"); ?>" class="form-control" type="date" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Fecha de Actividad En Letras (Ejemplo: Desde el 21 al 23 de Enero)</div>
			<div class="col-md-4"> <input type="text" name="fechaActividad" class="form-control" id="correoUsuario" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Tipo de Actividad</div>
			<div class="col-md-4"> 
                            <select name="estadoActividad" class="form-control" id="" required>
                                <option value="">Seleccionar..</option>
                                <option value="1">Activa</option>
                                <option value="0">Inactiva</option>
                            </select>
                        </div>
		</div>
		</div>
		<div>
			<input type="submit" id="btn" class="btn btn-success" value="Agregar" class="btn btn-succcess" name="submit"/>
		</div>
	</form>
        
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>					