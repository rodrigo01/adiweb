<div class="fullcont">
	<div id="boxnosotros">
		<h1 style="text-align: center; font-weight: bold;">TESTIMONIOS</h1>
		<div class="row">
                    <?php
                $objTestimonio=new Testimonios();
                $res=$objTestimonio->getTestimonio();
                while ($datos = mysql_fetch_array($res)){
                    ?>
			<div class="col-xs-6 col-md-4">
				<div class="coltestimonio">
					<div class="row">
						<div class="col-md-4">
							<img src="images/Comillas_Testimonio.png">
						</div>
						<div class="col-md-6">
							<img src="images/<?php echo $datos['img_testimonio']?>">
						</div>
					</div>
					<div class="testimonio-txt">
						<p>"<?php echo $datos['contenido_testimonio']?>"</p>
						<p><b><?php echo $datos['cliente_testimonio']?></b></p>
					</div>
					<div class="testimonio-sub"><a href="seccion_testimonio.php?seccion_testimonio=<?php echo $datos['id_testimonio']?>">Seguir leyendo...</a>	</div>
				</div>
			</div>
                    <?php } ?>
		</div>
	</div>
</div>