<div class="container">
<h3>Modificar Parametros de Seccion de Nosotros</h3>
	<form action="<?php echo $baseurl;?>administrador/nosotros/updatenosotros" method="POST" enctype="multipart/form-data">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Quienes Somos</div>
                        <div class="col-md-4"> <input type="text" value="<?php echo $nosotros['quienes_somos_nosotros'] ?>" name="quienesSomosNosotros" class="form-control" required/><input type="hidden" value="<?php echo $nosotros['id_nosotros'] ?>" name="idNosotros" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Contenido Quienes Somos</div>
                        <div class="col-md-4"> <textarea class="form-control" name="contenidoQuienesSomos" id=""><?php echo $nosotros['contenido_quienes_somos'] ?></textarea></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Titulo de Servicios</div>		
			<div class="col-md-4"> <input type="text" value="<?php echo $nosotros['titulo_servicios_nosotros'] ?>" name="tituloServiciosNosotros" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Contenido Servicios Nosotros</div>
                        <div class="col-md-4"> <textarea class="form-control" name="contenidoServiciosNosotros" id=""><?php echo $nosotros['contenido_servicios_nosotros'] ?></textarea></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Titulo de Mision</div>		
			<div class="col-md-4"> <input type="text" value="<?php echo $nosotros['titulo_mision_nosotros'] ?>" name="tituloMisionNosotros" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Mision</div>
                        <div class="col-md-4"> <textarea class="form-control" name="misionNosotros" id=""><?php echo $nosotros['mision_nosotros'] ?></textarea></div>
		</div>
		</div>
		<div>
			<input type="submit" class="btn btn-success" value="Modificar" class="btn btn-succcess" name="submit"/>
		</div>
	</form>
</div>
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>