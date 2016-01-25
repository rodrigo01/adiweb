<div class="fullcont">
	<div class="titlebox">
		<h1>Testimonio</h1>
	</div>
	<div class="redbarlol">

	</div>
</div>

<div class="fullcont">
	<div class="row">
                <?php
                $objTestimonios=new Testimonios();
                $res=$objTestimonios->getTestimonioXIdEspecifico($_GET['seccion_testimonio']);
                if ($datos = mysql_fetch_array($res)){
                ?>
		<div class="col-xs-6">
			<img src="images/<?php echo $datos['img_testimonio'] ?>">
		</div>
		<div class="col-xs-6">
			<div class="curso-principal">				
				<p>
					<?php echo $datos['contenido_testimonio'] ?>
				</p>				
			</div>
			<div class="curso-detalles">
				<div class="curso-fecha">
					<?php echo $datos['cliente_testimonio'] ?>
				</div>
				<div class="curso-ins">					
				</div>
			</div>
		</div>
             <?php } ?>
	</div>
</div>

