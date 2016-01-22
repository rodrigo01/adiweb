<div class="container">
	<h3>Eliminar Actividad</h3>
	<form action="<?php echo $baseurl;?>administrador/actividad/deleteactividad" method="POST">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Nombre de Actividad</div>		
			<div class="col-md-4"><?php echo $actividad['nombre_actividad']; ?></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Contenido de Actividad</div>
			<div class="col-md-4"><?php echo $actividad['contenido_actividad']; ?></div>
		</div>		
                </div><div class="form-group"><div class="row">
			<div class="col-md-2">Fecha de Actividad</div>
			<div class="col-md-4"><?php echo $actividad['fecha_actividad']; ?></div>
		</div>		
                </div><div class="form-group"><div class="row">			
			<div class="col-md-4"> <input type="hidden" name="idActividad" class="form-control" value="<?php echo $actividad['id_actividad']; ?>" required/></div>
		</div>                    
		<div>
                    <input type="submit" class="btn btn-success" value="Eliminar" class="btn btn-succcess" name="eli_administrador"/>
		</div>
	</form>
</div>
