<?php include('administrador/corelib.php');?>

<div class="fullcont">
	<div class="titlebox">
		<h1>TALLERES</h1>
	</div>
	<div class="redbarlol">

	</div>
</div>
 <?php
        $objActividades=new Actividades();
        $res=$objActividades->getActividadXTipo($tipo_actividad='taller');
        while ($datos = mysql_fetch_array($res)){
  ?>

<div class="fullcont" style="margin-bottom: 25px"> 
    <div class="col-md-12">
        <div class="row">
		<div class="col-md-6">
			<div>
				<a href="seccion.php?seccion=<?php echo $datos['seccion_actividad'] ?>"><img style="width:100%;" src="images/<?php echo $datos['img_actividad']?>"></a>
			</div>
		</div>
	   	<div class="col-md-6" style="text-align: center">
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
		</div>
                <div class="col-md-6">				
			<div class="curso-prin-ins">
				<h2>MX$<?php echo $datos['costo_actividad']?>.00</h2>
				<a href="registro.php?nombre_actividad=<?php echo $datos['nombre_actividad'] ?>" class="btn-insc">INSCRIBIRSE</a>
			</div>
		</div>
           </div>
        </div>
</div>
<?php } ?>