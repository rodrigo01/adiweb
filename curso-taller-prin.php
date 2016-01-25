
<div class="fullcont">
    <?php
                $objActividades=new Actividades();
                $res=$objActividades->getActividad();
                if ($datos = mysql_fetch_array($res)){
   ?>
	<div class="prin-taller">
		<a href="seccion.php?seccion=<?php echo $datos['seccion_actividad'] ?>"><img src="images/<?php echo $datos['img_actividad']?>"></a>
	</div>
	<div class="prin-detalle">
		<h2><?php echo $datos['nombre_actividad']?></h2>
		<div>
			<p><?php echo $datos['contenido_actividad']?></p>
		</div>
		<div class="curso-prin-fecha">
			<?php echo $datos['fecha_actividad']?>
		</div>
		<div class="curso-prin-ins">
			<h2>MX$<?php echo $datos['costo_actividad']?>.00</h2>
			<a href="registro.php?nombre_actividad=<?php echo $datos['nombre_actividad'] ?>" class="btn-insc">INSCRIBIRSE</a>
		</div>
	</div>
<?php } ?>
</div>

<div class="fullcont margtop">
	<div class="row">
            <?php
                    $objActividades=new Actividades();
                    $res=$objActividades->getActividad();
                    while ($datos = mysql_fetch_array($res)){                   
             ?>
		<div class="col-xs-6 col-md-4">
			<div class="smallcurso">
				<div class="smallcurso">
				<div class="smallcurso-img"><a href="seccion.php?seccion=<?php echo $datos['seccion_actividad'] ?>"><img width="270" height="137" src="images/<?php echo $datos['img_actividad']?>"></a></div>
				<div class="smallcurso-txt"><a href="seccion.php?seccion=<?php echo $datos['seccion_actividad'] ?>"><?php echo $datos['nombre_actividad']?></a></div>
				<div class="smallcurso-sub"><?php echo $datos['fecha_actividad']?></div>
                                </div>
			</div>
		</div>		
            <?php } ?>
	</div>
</div>