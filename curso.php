<div class="fullcont">
	<div class="titlebox">
		<h1>ACTIVIDAD</h1>
	</div>
	<div class="redbarlol">

	</div>
</div>

<div class="fullcont">
	<div class="row">
                <?php
                $objActividades=new Actividades();
                $res=$objActividades->getActividadXSeccion($_GET['seccion']);
                if ($datos = mysql_fetch_array($res)){
                ?>
		<div class="col-xs-6">
			<img width="450px" height="350px" src="images/<?php echo $datos['img_actividad'] ?>">
		</div>
		<div class="col-xs-6">
			<div class="curso-principal">
				<h2 style="text-align:center;"><?php echo $datos['nombre_actividad'] ?></h2>
				<p>
					<?php echo $datos['contenido_actividad'] ?>
				</p>				
			</div>
			<div class="curso-detalles">
				<div class="curso-fecha">
					<?php echo $datos['fecha_actividad'] ?> del 2016
				</div>
				<div class="curso-ins">
					<h3>MX$<?php echo $datos['costo_actividad'] ?>.00</h3>
					<a href="registro.php?nombre_actividad=<?php echo $datos['nombre_actividad'] ?>" class="btn-insc">INSCRIBIRSE</a>
				</div>
			</div>
		</div>
             <?php } ?>
	</div>
</div>
