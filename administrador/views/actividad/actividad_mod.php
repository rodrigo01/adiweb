<h3>Modificar Actividad</h3>
	<form action="<?php echo $baseurl;?>administrador/actividad/updateactividad" method="POST" enctype="multipart/form-data">
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
                                <option value="1">Activa</option>
                                <option value="0">Inactiva</option>
                            </select>
                        </div>
		</div>
		</div>
		<div>
			<input type="submit" class="btn btn-success" value="Modificar" class="btn btn-succcess" name="submit"/>
		</div>
	</form>
