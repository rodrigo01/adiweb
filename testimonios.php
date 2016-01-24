<?php include('administrador/corelib.php');?>
<div class="fullcont">
	<div class="titlebox">
		<h1>TESTIMONIOS</h1>
	</div>
	<div class="redbarlol">

	</div>
</div>
    <?php
                $objTestimonio=new Testimonios();
                $res=$objTestimonio->getTestimonio();
                while ($datos = mysql_fetch_array($res)){
     ?>
<div class="fullcont margtop">
	<div id="boxnosotros" class="testimonicent">
		<div class="row">
			<div class="col-xs-6">
				<iframe width="464" height="315" src="<?php echo $datos['video_testimonio']?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-xs-6">
				<div class="row">
						<div class="col-md-4" style="">
							<img src="images/Comillas_Testimonio.png">
						</div>
						<div class="col-md-6">
							<img src="images/<?php echo $datos['img_testimonio']?>">
						</div>
					</div>
				<div class="testimoniobox">
					<div>
						<p><?php echo $datos['contenido_testimonio']?></p>
					</div>
					<div class="testimonio-who">
						<p><b><?php echo $datos['cliente_testimonio']?></b></p>
					</div>
				</div>
			</div>                        
		</div>
	</div>
</div>
<?php } ?>
<div class="fullcont margtop">
	<div id="boxnosotros" class="testimonicent">
		<div class="row">
			<div class="col-xs-6">
				<a href="index.php?secc=testimonio_agr" class="btn-insc">COMENTENOS SU TESTIMONIO</a>
			</div>
			<div class="col-xs-6">
				"Con tu testimonio animaras a otros a realizar nuestros cursos y talleres. Muchas gracias"
			</div>                        
		</div>
	</div>
</div>