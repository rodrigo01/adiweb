<div class="fullcont">
	<div class="titlebox">
		<h1>PRODUCTO</h1>
	</div>
	<div class="redbarlol">

	</div>
</div>

<div class="fullcont">
	<div class="row">
                <?php
                $objProductos=new Productos();
                $res=$objProductos->getProductoXTitulo($_GET['producto']);
                if ($datos = mysql_fetch_array($res)){
                ?>
		<div class="col-xs-6">
			<img src="images/<?php echo $datos['imagen_producto'] ?>">
		</div>
		<div class="col-xs-6">
			<div class="curso-principal">
				<h2 style="text-align:center;"><?php echo $datos['titulo_producto'] ?></h2>
				<p>
					<?php echo $datos['info_producto'] ?>
				</p>				
			</div>
			<div class="curso-detalles">				
				<div class="curso-ins">
					<h3>MX$<?php echo $datos['precio_producto'] ?>.00</h3>					
				</div>
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
             <?php } ?>
	</div>
</div>