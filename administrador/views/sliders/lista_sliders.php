<div>
	<h2>Sliders</h2>
	<a class="btn btn-info" href="<?php echo $baseurl?>administrador/slider/agregar">Agregar Slider</a>
</div>
<form action="<?php echo $baseurl;?>administrador/slider/updorden" method="POST">
	<input type="submit" value="Actualizar Orden" class="btn btn-success">
<table class="table">
	<tr>
		<td>Nombre</td>
		<td>Link</td>
		<td>Activo</td>
		<td>Orden</td>
		<td>Opciones</td>
	</tr>
	<?php while($slider = mysql_fetch_array($slidersList) ){?>
	<tr>
		<td><?php echo $slider['nombre_slider'];?></td>
		<td><?php echo $slider['enlace_slider'];?></td>
		<td><?php echo $slider['activo'];?></td>
		<td class="col-md-1">
			<input class="form-control" type="number" name="orden[<?php echo $slider['id_slider'];?>]" value="<?php echo $slider['orden_slider'];?>">
		</td>
		<td><a c class="btn btn-info" href="<?php echo $baseurl;?>administrador/slider/editar/<?php echo $slider['id_slider'];?>">Editar</a></td>
	</tr>
	<?php }?>
</table>
</form>