	<h3>Agregar Actividad</h3>
	<form action="<?php echo $baseurl;?>administrador/actividad/addactividad" method="POST" name="form" onSubmit="return validar_clave()">
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
                        <div class="col-md-4"> <textarea class="form-control" name="contenidoActividad" id="" required></textarea></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Subir Imagen</div>
			<div class="col-md-4"> <input name="imgActividad" class="form-control" type="file" required/></div>
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
		</div>
		<div>
			<input type="submit" class="btn btn-success" value="Agregar" class="btn btn-succcess" name="agr_actividad"/>
		</div>
	</form>