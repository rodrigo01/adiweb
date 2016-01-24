<?php include('administrador/corelib.php') ?>

<div class="fullcont">
	<div class="titlebox" style="width: 31%;">
		<h1>TIENDA ONLINE</h1>
	</div>
	<div class="redbarlol" style="width: 69%;">
	</div>
</div>
  <?php
                    $objProductos=new Productos();
                    $res=$objProductos->getProductos();
                    while ($datos = mysql_fetch_array($res)){
   ?>
<div class="fullcont">  
	<div id="boxnosotros" class="margtop">
		<div class="row">                     
			<div class="col-xs-6 col-md-4">
				<div class="feature-prod-img-sing">
					<img src="images/<?php echo $datos['imagen_producto'] ?>">
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="col-md-12">
					<div class="feature-prod-title-sing">
						<h2><?php echo $datos['titulo_producto']?></h2>
					</div>
					<div class="feature-prod-desc-sing">
						<?php echo $datos['info_producto']?>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="wbg">
								<div id="addcartbox">
									<div class="pricebox">
										<h3>MX$<?php echo $datos['precio_producto']?>.00</h3>
										<p>Precio final, sin gastos de envio<br>
											Tiempo de envio: <?php echo $datos['envio_producto']?>
										</p>
									</div>                                                                     									
								</div>
                                                                <div>
                                                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                                        <input type="hidden" name="cmd" value="_s-xclick">
                                                                        <input type="hidden" name="hosted_button_id" value="JUVHQ4RVKEMAE">
                                                                        <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                                                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                                                    </form>
                                                                </div>
                                                                <!--<div class="addtocart">
								   <a href="#" class="btn-insc">COMPRAR</a>
								</div>-->
							</div>                                                        
						</div>
					</div>
				</div>
			</div>	                    
		</div>	
	</div>
</div>
<?php } ?>