<h3>Modificar Slider</h3>
<form action="<?php echo $baseurl;?>administrador/slider/updslider" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2">Nombre Slider</div>		
	  		<div class="col-md-4"> <input type="text" name="nombre_slider" class="form-control" value="<?php echo $slider['nombre_slider'];?>" required/></div>
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2">Link Slider</div>		
	  		<div class="col-md-4"> <input type="text" name="enlace_slider" class="form-control" value="<?php echo $slider['enlace_slider'];?>" required/></div>
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2">Orden</div>		
	  		<div class="col-md-1"> <input type="text" name="orden_slider" class="form-control" value="<?php echo $slider['orden_slider'];?>" required/></div>
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
	  		<div class="col-md-2">Activo</div>		
	  		<div class="col-md-1">
	  			<select name="activo" class="form-control">
	  				<option <?php if($slider['activo']==1){echo 'selected';}?> value="1">Si</option>
	  				<option <?php if($slider['activo']==0){echo 'selected';}?> value="0">No</option>
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
	  		<div class="col-md-2"><input type="submit" value="Actualizar" class="btn btn-success"></div>		
	    </div>
	</div>
	<input type="hidden" name="id_slider" class="form-control" value="<?php echo $slider['id_slider'];?>"/>
	<input type="hidden" name="imagen_grande_input" class="form-control" value="<?php echo $slider['imagen_slider'];?>"/>
	<input type="hidden" name="imagen_preview_input" class="form-control" value="<?php echo $slider['preview_slider'];?>"/>
</form>