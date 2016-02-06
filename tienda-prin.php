<div class="fullcont">
	<div>
		<h2>TIENDA ONLINE</h2>
	</div>    
	<div class="row">
            <?php
                    $objProductos=new Productos();
                    $res=$objProductos->getProductos();
                    while ($datos = mysql_fetch_array($res)){
            ?>
		<div class="col-md-6 col-xs-12">
				<div id="boxnosotros" class="col-md-12">
					<div class="feature-prod-img col-md-6 cold-xs-12">
						<img width="195px" height="99px" src="images/<?php echo $datos['imagen_producto'] ?>">
					</div>
					<div class="col-md-6 cold-xs-12">
						<div class="feature-prod-title">
							<h3><?php echo $datos['titulo_producto']?></h3>
						</div>
						<div class="feature-prod-desc">
							<p>Para mayor Informacion</p>
							
						</div>
						<a href="more.php?producto=<?php echo $datos['titulo_producto'] ?>">Seguir Leyendo</a>	
					</div>
					
				</div>
				<div id="addcartbox" style="padding-top:15px;" class="col-md-12">
					<div class="pricebox col-md-6 col-xs-12">
						<h3>MX$<?php echo $datos['precio_producto']?>.00</h3>
						<p>Precio final, sin gastos de envio<br>
							Tiempo de envio <?php echo $datos['envio_producto']?>
						</p>
					</div>	
					<div class="col-md-6 col-xs-12">
                     <?php echo $datos['boton_producto']?>
                    </div>			
				</div>
		</div>
	     <?php } ?>
        </div> 
</div>