<div class="fullcont">
	<div id="boxnosotros">
		<h1 style="text-align: center; font-weight: bold;">TESTIMONIOS</h1>
		<div class="row">
        <?php
		    $objTestimonio=new Testimonios();
		    $res=$objTestimonio->getTestimonio();
		    while ($datos = mysql_fetch_array($res)){
        ?>
			<div class="col-xs-12 col-md-4">
				<div class="coltestimonio">
					<div class="row">
						<div class="col-md-4">
							<img src="images/Comillas_Testimonio.png">
						</div>
						<div class="col-md-8">
							<img src="images/<?php echo $datos['img_testimonio']?>">
						</div>
						<div class="col-md-12">
							<p><?php echo $datos['contenido_testimonio']?></p>
							<p><b><?php echo $datos['cliente_testimonio']?></b></p>
							<a style="color:#000;" href="seccion_testimonio.php?seccion_testimonio=<?php echo $datos['id_testimonio']?>">Seguir leyendo...</a>
						</div>
					</div>
				</div>
			</div>
        <?php } ?>
		</div>
	</div>
</div>