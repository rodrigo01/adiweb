<?php include('administrador/models/productos.php'); ?>
<div class="fullcont">
	<div>
		<h2>TIENDA ONLINE</h2>
	</div>
    <?php
                    $objProductos=new Productos();
                    $res=$objProductos->getProductos();
                    while ($datos = mysql_fetch_array($res)){
   ?>
	<div class="row">
		<div class="col-xs-6">
			<div id="boxnosotros">
				<div class="feature-prod-img">
					<img width="195px" height="99px" src="images/<?php echo $datos['imagen_producto'] ?>">
				</div>
				<div class="feature-prod-title">
					<h2><?php echo $datos['titulo_producto']?></h2>
				</div>
				<div class="feature-prod-desc">
					<p>Para mayor Informacion</p>
					<a href="more.php?producto=<?php echo $datos['titulo_producto'] ?>">Seguir Leyendo</a>	
				</div>
			</div>
			<div id="addcartbox">
				<div class="pricebox">
					<h3>MX$<?php echo $datos['precio_producto']?>.00</h3>
					<p>Precio final, sin gastos de envio<br>
						Tiempo de envio <?php echo $datos['envio_producto']?>
					</p>
                                        <div>
                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                            <input type="hidden" name="cmd" value="_s-xclick">
                                            <input type="hidden" name="hosted_button_id" value="JUVHQ4RVKEMAE">
                                            <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                        </form>
                                        </div>
				</div>				
			</div>
		</div>
	  </div>
    <?php } ?>
</div>