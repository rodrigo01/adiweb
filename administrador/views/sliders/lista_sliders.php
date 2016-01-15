<div>
	<h2>Sliders</h2>
	<a class="btn btn-info" href="<?php echo $baseurl?>administrador/sliders/agregar">Agregar Slider</a>
</div>
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
		<td><?php echo $slider['imagen_activo'];?></td>
		<td><input type="number" value="<?php echo $slider['orden_slider'];?>"></td>
		<td><a href="<?php echo $baseurl;?>administrador/slider/editar/?slider=<?php echo $slider['id_slider'];?>">Editar</a></td>
	</tr>
	<?php }?>
</table>