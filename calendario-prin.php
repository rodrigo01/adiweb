<div class="fullcont">
	<div>
		<div class="titlecal">
			<div class="redbox" style="width: <br>initial;">
				<h1>CALENDARIO</h1>
			</div>
		</div>
	</div>

	<div class="row">
	<?php
	// variables base
	$fechas = array();
	$anio = 0;
	$mes = 0;
	$doa = 0;
	$meses = array('','Enero','Febrero','Marzo', 'Abril', 'Mayo', 'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

	// procedimiento de array fechas
	$Calendarios = new Calendarios();
	$resCalendario = $Calendarios->getCalendario();
	while ($calendario = mysql_fetch_array($resCalendario)){
		list($anio,$mes,$dia) = explode("-", $calendario['fecha_calendario']);
		//echo '##'.$calendario['fecha_calendario'];
		$fechas[$anio][intval($mes)][intval($dia)] = $calendario;
	}
	$anio_actual = 2016;
	foreach($fechas[$anio_actual] as $mes=>$datomes){
		?>
		<div class="col-xs-6 col-sm-4">
			<div class="calmes">
				<div class="redbox">
					<?php echo $meses[$mes].' '.$anio_actual;?>
				</div>
				<div class="caldata">
					<ul>
					<?php
						foreach($datomes as $dia=>$datodia){
					?>
						<li><a href="seccion.php?seccion=<?php echo $datodia['seccion_actividad']?>"><?php echo $dia;?> : <?php echo $datodia['nombre_actividad']?></a></li>
					<?
						}
					?>
					</ul>
				</div>
			</div>
		</div>

		<?
		}
	?>
	</div>




	
	
		
	
	
</div>