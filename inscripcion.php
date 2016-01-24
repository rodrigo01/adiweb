<h3>Formulario de Inscripcion</h3>
	<form action="<?php echo $baseurl;?>administrador/inscripcion/inscripcion" method="POST" enctype="multipart/form-data">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Nombre y Apellido</div>		
			<div class="col-md-4"> <input type="text" name="nombreActividad" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Numero de Identificacion</div>
			<div class="col-md-4"> <input type="text" name="costoActividad" class="form-control" id="correoUsuario" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Fecha Actual</div>
			<div class="col-md-4"> <input name="fechaInicio" class="form-control" type="date" required/></div>
		</div>
		</div>
                <?php
                    $objActividades=new Actividades();
                    $res=$objActividades->getActividadXNombre($nombre_actividad);
                    if ($datos = mysql_fetch_array($res)){
                ?>
                <input type="hidden" name="nombreActividad" value="<?php echo $datos['nombre_actividad'] ?>" class="form-control" required/>
                <?php } ?>
		<div>
			<input type="submit" class="btn btn-success" value="Inscribir" class="btn btn-succcess" name="submit"/>
		</div>
	</form>