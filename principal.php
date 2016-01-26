<?php
//cargamos los modelos que usaremos en este sitio
include('administrador/corelib.php');

//cargamod modelos
$Sliders = new Sliders();
$Contenidos = new Contenidos();

//cargamos informacion
$slider_list = $Sliders->getSliders();

?>

<div id="homeslider">
	<ul class="bjqs">
		<?php 
		$imageneschicas = '';
		$i = 0;
		while($slider = mysql_fetch_array($slider_list)){
			//generamos imagen chica
			$imageneschicas.="imagen[".$i."] = '".$slider['preview_slider']."';\n";
			$i++;
		?>
			<li><a href="<?php echo $slider['enlace_slider'];?>"><img alt="<?php echo $slider['nombre_slider'];?>" src="<?php echo $slider['imagen_slider'];?>"></a></li>
		<?php }?>
	</ul>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {



	$('#homeslider').bjqs({
		'height' : 480,
		'width' : 1000,
		'showcontrols' : false, 
		'responsive' : true,
		'showmarkers' : true
	});
	var imagen = new Array("Saab", "Volvo", "BMW");
	<?php
		echo $imageneschicas; //imagenes chicas de slider
	?>

	var i = 0;
	$('.bjqs-markers').find('li').each(function(){

		$(this).html('<a href="#"><img src="'+imagen[i]+'"></a>');
		i++;

	});

});
</script>
<style>
.bjqs-markers{
	    float: left;
}
</style>

<div style="display:none;" class="row minibancont">
	<div class="col-xs-6 col-md-4 minibans">
		<a href="#"><img src="images/Material_WEB_preview-Jugando.jpg"></a>
	</div>
	<div class="col-xs-6 col-md-4 minibans">
		<a href="#"><img src="images/Material_WEB_preview-Juventud.jpg"></a>
	</div>
	<div class="col-xs-6 col-md-4 minibans">
		<a href="#"><img src="images/Material_WEB_preview-Fotolectura.jpg"></a>
	</div>
</div>


<div class="fullcont bordtb">
<?php include ('nosotros-prin.php');?>
</div>

<div class="fullcont bordtb">
<?php include ('curso-taller-prin.php');?>
</div>

<div class="fullcont bordtb">
<?php include ('testimonios-prin.php');?>
</div>

<div class="fullcont bordtb">
<?php include ('tienda-prin.php');?>
</div>

<div class="fullcont bordtb">
<?php include ('calendario-prin.php');?>
</div>

<div class="fullcont bordtb">
<?php include ('contacto-prin.php');?>
</div>