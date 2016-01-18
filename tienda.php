<?php include('administrador/corelib.php') ?>

<div class="fullcont">
	<div class="titlebox" style="width: 31%;">
		<h1>TIENDA ONLINE</h1>
	</div>
	<div class="redbarlol" style="width: 69%;">
	</div>
</div>
  <?php
                    $objActividades=new Actividades();
                    $res=$objActividades->getActividadOnly();
                    while ($datos = mysql_fetch_array($res)){
   ?>
<div class="fullcont">  
	<div id="boxnosotros" class="margtop">
		<div class="row">                     
			<div class="col-xs-6 col-md-4">
				<div class="feature-prod-img-sing">
					<img src="images/<?php echo $datos['img_actividad'] ?>">
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="col-md-12">
					<div class="feature-prod-title-sing">
						<h2><?php echo $datos['nombre_actividad']?></h2>
					</div>
					<div class="feature-prod-desc-sing">
						<?php echo $datos['contenido_actividad']?>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="wbg">
								<div id="addcartbox">
									<div class="pricebox">
										<h3>MX$<?php echo $datos['costo_actividad']?>.00</h3>
										<p>Precio final, sin gastos de envio<br>
											Tiempo de envio 1 - 3 d&iacute;as
										</p>
									</div>
									<!--
									<div class="addtocart">
										<input type="text" value="1" name="qty"><a href="#"><img src="images/add-cart.png"></a>
									</div>
									-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	                    
		</div>	
	</div>
</div>
<?php } ?>