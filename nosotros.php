<?php include('administrador/corelib.php');?>
<?php
 $objNosotros=new Nosotros();
 $res=$objNosotros->getNosotros();
 if ($datos = mysql_fetch_array($res)){
?>
<div id="contnosotros">
	<div>
		<div class="nosotrostxt">
			<h2><?php echo $datos['quienes_somos_nosotros'] ?></h2>
			<p>
			   <?php echo $datos['contenido_quienes_somos'] ?>	
			</p>

			<h2><?php echo $datos['titulo_servicios_nosotros'] ?></h2>	
			<p>
			    <?php echo $datos['contenido_servicios_nosotros'] ?>
			</p>

			
		</div>
		<div class="nosotrosimg">
			<img src="images/nosotros-v1.png">
		</div>
		<div class="nosotrosbottxt">
			<h2><?php echo $datos['titulo_mision_nosotros'] ?></h2>
			<p>
		            <?php echo $datos['mision_nosotros'] ?>
			</p>
		</div>

	</div>
</div>
<?php } ?>
