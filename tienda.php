<?php

$sqlCursos = "SELECT * FROM `cursos`";
$resCursos = mysql_query($sqlCursos);

?>
<div class="fullcont">
	<div class="titlebox" style="width: 31%;">
		<h1>TIENDA ONLINE</h1>
	</div>
	<div class="redbarlol" style="width: 69%;">

	</div>
</div>

<div class="fullcont">
	<?php
	while($curso = mysql_fetch_array($resCursos)){
	?>
	<div id="boxnosotros" class="margtop">
		<div class="row">
			<div class="col-xs-6 col-md-4">
				<div class="feature-prod-img-sing">
					<img src="images/<?php echo $curso['img_curso'];?>">
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="col-md-12">
					<div class="feature-prod-title-sing">
						<h2><?php echo $curso['nombre_curso'];?></h2>
					</div>
					<div class="feature-prod-desc-sing">
						<?php echo $curso['descripcion_curso'];?>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="wbg">
								<div id="addcartbox">
									<div class="pricebox">
										<h3>MX$<?php echo $curso['costo_curso'];?></h3>
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
	<?php } ?>
</div>