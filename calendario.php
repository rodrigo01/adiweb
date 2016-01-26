<?php include('administrador/corelib.php');?>
<div class="fullcont">
	<div class="titlebox">
		<h1>CALENDARIO</h1>
	</div>
	<div class="redbarlol">

	</div>
</div>

<div class="fullcont">
	<div style="text-align:center; color:#7f8080;">
		<h1><b>2016</b></h1>
	</div>
</div>

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
	<div class="fullcont margtop">
		<div class="row">
			<div class="col-xs-4">
				<div class="redbox mestitle">
					<?php echo $meses[$mes];?>
				</div>
			</div>
			<div class="col-xs-8">

			</div>
		</div>
	</div>

	<div class="fullcont">
		<div class="row">
			<?php
				foreach($datomes as $dia=>$datodia){
			?>
			<div class="col-xs-6 margtop">
				<div class="row">
			      <div class="col-xs-6 brddate">
			      	<div class="bigdate">
			      		<?php echo $dia;?>
			      	</div>
			      </div>
			      <div class="col-xs-6">
			      	<div class="smallcurso">
						<div class="smallcurso-img"><img src="images/<?php echo $datodia['img_actividad']?>"></div>
						<div class="smallcurso-txt"><a href="seccion.php?seccion=<?php echo $datodia['seccion_actividad']?>"><?php echo $datodia['nombre_actividad']?></a></div>
					</div>
			      </div>
			    </div>
			</div>	
			<?
				}
			?>
		</div>
	</div>
	<?
	}
?>