<?php include('administrador/models/productos.php'); ?>
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
                                         <?php echo $datos['boton_producto']?>
                                        </div>
				</div>				
			</div>
		</div>
	     <?php } ?>
        </div> 
</div>