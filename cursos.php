<?php include('administrador/corelib.php');?>

<div class="fullcont">
	<div class="titlebox">
		<h1>CURSOS</h1>
	</div>
	<div class="redbarlol">

	</div>
</div>

<div class="fullcont">    
	<div class="row">  
            <?php
                $objActividades=new Actividades();
                $res=$objActividades->getActividadXTipo($tipo_actividad='curso');
                if ($datos = mysql_fetch_array($res)){
            ?>
		<div class="col-xs-6">
			<img src="images/<?php echo $datos['img_actividad']?>">
		</div>
		<div class="col-xs-6">
			<div class="curso-principal">
				<h2 style="text-align:center;"><?php echo $datos['nombre_actividad']?></h2>
				<p>
					<?php echo $datos['contenido_actividad']?>
				</p>
			</div>
			<div class="curso-detalles">
				<div class="curso-fecha">
					<?php echo $datos['fecha_actividad']?>
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

<div class="fullcont margtop">
	<div class="row">            
                <?php
                    $objActividades=new Actividades();
                    $res=$objActividades->getActividadXTipo($tipo_actividad='curso');
                    while ($datos = mysql_fetch_array($res)){                   
                ?>
		<div class="col-xs-6 col-md-4">                                               
                                <div class="smallcurso">
				<div class="smallcurso-img"><a href="seccion.php?seccion=<?php echo $datos['seccion_actividad'] ?>"><img width="270" height="137" src="images/<?php echo $datos['thumbnail_actividad']?>"></a></div>
				<div class="smallcurso-txt"><a href="seccion.php?seccion=<?php echo $datos['seccion_actividad'] ?>"><?php echo $datos['nombre_actividad']?></a></div>
				<div class="smallcurso-sub"><?php echo $datos['fecha_actividad']?></div>
                                </div>             	
		</div> 
            <?php } ?>
	</div>
</div>