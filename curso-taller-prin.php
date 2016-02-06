<div class="fullcont margtop">
    <?php
        $objActividades = new Actividades();
        $res=$objActividades->getActividad();
        if ($datos = mysql_fetch_array($res)){
   ?>
   <div class="col-md-6">
		<div>
			<a href="seccion.php?seccion=<?php echo $datos['seccion_actividad'] ?>"><img style="width:100%;" src="images/<?php echo $datos['img_actividad']?>"></a>
		</div>
	</div>
   <div class="col-md-6">
		<h2><?php echo $datos['nombre_actividad']?></h2>
		<div>
			<?php 
				$string = substr($datos['contenido_actividad'],0, strpos($datos['contenido_actividad'], "</p>")+4);
				echo $string;
			?>
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
        $objActividades = new Actividades();
        $res = $objActividades->getActividadOnly();
        $i = 0;
        while ($datos = mysql_fetch_array($res))
        {                   
     ?>
		<div class="col-xs-6 col-md-4">
			<div class="smallcurso">
				<div class="smallcurso">
					<div class="smallcurso-img"><a href="seccion.php?seccion=<?php echo $datos['seccion_actividad'] ?>"><img src="images/<?php echo $datos['thumbnail_actividad']?>"></a></div>
					<div class="smallcurso-txt"><a href="seccion.php?seccion=<?php echo $datos['seccion_actividad'] ?>"><?php echo $datos['nombre_actividad']?></a></div>
					<div class="smallcurso-sub"><?php echo $datos['fecha_actividad']?></div>
                </div>
			</div>
		</div>		
    <?php 
	   		$i++;
		    if($i>2){
		    	break;
		    }
	    } 
    ?>
	</div>
</div>