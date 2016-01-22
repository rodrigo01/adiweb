<div class="container">
<h3>Modificar Testimonio</h3>
	<form action="<?php echo $baseurl;?>administrador/testimonio/updatetestimonio" method="POST" enctype="multipart/form-data">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Contenido del Testimonio</div>
                        <div class="col-md-4"> <textarea class="form-control" name="contenidoTestimonio" id=""><?php echo $testimonio['contenido_testimonio'] ?></textarea></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Video de Testimonio</div>		
			<div class="col-md-4"> <input type="text" name="videoTestimonio" value="<?php echo $testimonio['video_testimonio'] ?>" class="form-control" required/><input type="hidden" name="idTestimonio" value="<?php echo $testimonio['id_testimonio'] ?>" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Nombre y Apellido</div>		
			<div class="col-md-4"> <input type="text" value="<?php echo $testimonio['cliente_testimonio'] ?>" name="clienteTestimonio" class="form-control" required/></div>
		</div>
		</div>
		<div>
			<input type="submit" class="btn btn-success" value="Modificar" class="btn btn-succcess" name="submit"/>
		</div>
	</form>
</div>
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
