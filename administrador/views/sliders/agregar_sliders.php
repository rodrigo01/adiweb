<h3>Modificar Usuario</h3>
<form action="<?php echo $baseurl;?>administrador/slider/addslider" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2">Nombre Slider</div>		
	  		<div class="col-md-4"> <input type="text" name="nombre_slider" class="form-control" value="" required/></div>
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2">Link Slider</div>		
	  		<div class="col-md-4"> <input type="text" name="enlace_slider" class="form-control" value="" required/></div>
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2">Orden</div>		
	  		<div class="col-md-1"> <input type="text" name="orden_slider" class="form-control" value="" required/></div>
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2">Activo</div>		
	  		<div class="col-md-1">
	  			<select class="form-control">
	  				<option value="1">Si</option>
	  				<option value="0">No</option>
	  			</select>
	  		</div>
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2">Imagen Grande</div>		
	  		<div class="col-md-2"><input type="FILE" name="imagen_grande"></div>
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2">Imagen Preview</div>		
	  		<div class="col-md-2"><input type="FILE" name="imagen_preview"></div>
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2"><input type="submit" value="Cargar" class="btn btn-success"></div>		
	    </div>
	</div>
</form>