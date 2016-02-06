<?php
//cargamos los modelos que usaremos en este sitio
include('administrador/corelib.php');

//cargamod modelos
$Sliders = new Sliders();
$Contenidos = new Contenidos();

//cargamos informacion
$slider_list = $Sliders->getSliders();

?>
<div class="row">
	<div class="col-md-12">
		<div id="homeslider fishslider">
			<ul class="fish_slide">
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
			<div class="fish_thumbs">

			</div>
		</div>
	</div>
	
</div>


<?php include ('nosotros-prin.php');?>



<?php include ('curso-taller-prin.php');?>


<?php include ('testimonios-prin.php');?>



<?php include ('tienda-prin.php');?>


<?php include ('calendario-prin.php');?>



<?php include ('contacto-prin.php');?>



<script type="text/javascript">
	// desaparecemos todos
	var tiempo = 6000;
	var slide_pos = 0;
	var limite = 2;
	var heigthfish = 455;


	$('.fish_slide li').css('display','none');
	// ejecutamos el primero
	$( ".fish_slide li" ).each(function( index ) {
		if(index==0){
			$(this).css('display','block');
		}
	});

	function fish_slider_next(){
		slide_pos++;
		if(limite<slide_pos){
			slide_pos = 0;
		}
	  	$( ".fish_slide li" ).each(function( index ) {
	  		$(this).css('display','none');
			if(index==slide_pos){
				$(this).fadeIn();
			}
		});
		setTimeout(fish_slider_next, tiempo);
	}
	setTimeout(fish_slider_next, tiempo);
</script>
