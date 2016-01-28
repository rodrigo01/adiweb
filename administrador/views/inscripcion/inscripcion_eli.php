<div class="container">
	<h3>Eliminar Alumno Registrado</h3>
	<form action="<?php echo $baseurl;?>administrador/inscripcion/deleteinscripcion" method="POST">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Nombre y Apellido de Alumno</div>		
			<div class="col-md-4"><?php echo $inscripcion['nombre_apellido_alumno']; ?></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Numero de Identificacion de Alumno</div>
			<div class="col-md-4"><?php echo $inscripcion['identificacion_alumno']; ?></div>
		</div>		
                </div><div class="form-group"><div class="row">
			<div class="col-md-2">Curso o Taller</div>
			<div class="col-md-4"><?php echo $inscripcion['curso']; ?></div>
		</div>		
                </div><div class="form-group"><div class="row">			
			<div class="col-md-4"> <input type="hidden" name="idInscripcion" class="form-control" value="<?php echo $inscripcion['id_inscripcion']; ?>" required/></div>
		</div>                    
		<div>
                    <input type="submit" class="btn btn-success" value="Eliminar" class="btn btn-succcess" name="eli_administrador"/>
		</div>
	</form>
</div>