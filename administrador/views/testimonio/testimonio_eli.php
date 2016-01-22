<div class="container">
	<h3>Eliminar Testimonio</h3>
	<form action="<?php echo $baseurl;?>administrador/testimonio/deletetestimonio" method="POST">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Nombre de Actividad</div>		
			<div class="col-md-4"><?php echo $testimonio['id_testimonio']; ?></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Contenido de Actividad</div>
			<div class="col-md-4"><?php echo $testimonio['contenido_testimonio']; ?></div>
		</div>		
                </div><div class="form-group"><div class="row">			
			<div class="col-md-4"> <input type="hidden" name="idTestimonio" class="form-control" value="<?php echo $testimonio['id_testimonio']; ?>" required/></div>
		</div>                    
		<div>
                    <input type="submit" class="btn btn-success" value="Eliminar" class="btn btn-succcess" name="eli_administrador"/>
		</div>
	</form>
</div>
</div>