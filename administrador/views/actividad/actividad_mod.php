<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script language="JavaScript">
        function validar_imagen() {            
        
        var cla1 = document.formulario.fileToUpload.value;
        var cla2 = document.formulario.fileToUploadThumbnail.value;
       
        if (cla1 == cla2){
            alert ("El archivo Imagen (Thumbnail) es el mismo introducido en el campo anterior subir imagen. Por favor introduzca el thumbnail correcto");
            return false;
        }else{
            return true;
        }
        }
</script>
<script>
    webshims.setOptions('waitReady', false);
    webshims.setOptions('forms-ext', {types: 'date'});
    webshims.polyfill('forms forms-ext');    
</script>

<h3>Modificar Actividad</h3>
	<form action="<?php echo $baseurl;?>administrador/actividad/updateactividad" name=formulario method="POST" onSubmit="return validar_imagen()" method="POST" enctype="multipart/form-data">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Titulo de la Actividad</div>		
			<div class="col-md-4"> <input type="text" name="nombreActividad" value="<?php echo $actividad['nombre_actividad']; ?>" class="form-control" required/><input type="hidden" name="idActividad" value="<?php echo $actividad['id_actividad']; ?>" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Costo de la Actividad</div>
			<div class="col-md-4"> <input type="text" name="costoActividad" value="<?php echo $actividad['costo_actividad']; ?>" class="form-control" id="correoUsuario" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Contenido de la Actividad</div>
            <div class="col-md-4"> <textarea class="form-control" name="contenidoActividad" id="" required><?php echo $actividad['contenido_actividad']; ?></textarea></div>
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
                                <option <?php if($actividad['tipo_actividad']=='curso'){echo 'selected';}?> value="curso">Curso</option>
                                <option <?php if($actividad['tipo_actividad']=='taller'){echo 'selected';}?> value="taller">Taller</option>
                            </select>
                        </div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Fecha de Inicio de Actividad</div>
			<div class="col-md-4"> <input name="fechaInicio" class="form-control" type="date" value="<?php echo $actividad['fecha_inicio_actividad']; ?>" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Fecha de Fin de Actividad</div>
			<div class="col-md-4"> <input name="fechaFin" class="form-control" type="date" value="<?php echo $actividad['fecha_fin_actividad']; ?>" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Fecha de Actividad En Letras (Ejemplo: Desde el 21 al 23 de Enero)</div>
			<div class="col-md-4"> <input type="text" name="fechaActividad" value="<?php echo $actividad['fecha_actividad']; ?>" class="form-control" id="correoUsuario" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Estado de Actividad</div>
			<div class="col-md-4"> 
                            <select name="estadoActividad" class="form-control" id="" required>
                                <option value="">Seleccione..</option>
                                <option <?php if($actividad['estado_actividad']=='1'){echo 'selected';}?> value="1">Activa</option>
                                <option <?php if($actividad['estado_actividad']=='0'){echo 'selected';}?> value="0">Inactiva</option>
                            </select>
                        </div>
		</div>
		</div>
		<div>
			<input type="submit" class="btn btn-success" value="Modificar" class="btn btn-succcess" name="submit"/>
		</div>
	</form>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						