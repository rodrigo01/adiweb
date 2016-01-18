<?php include('administrador/corelib.php') ?>
<div class="fullcont">
	<div class="titlebox">
		<h1>CALENDARIO</h1>
	</div>
	<div class="redbarlol">

	</div>
</div>

<?php 
   $objActividades=new Actividades();
   $res=$objActividades->getActividad();
   if ($datos = mysql_fetch_array($res)){
?>

<div class="fullcont">
	<div style="text-align:center; color:#7f8080;">
		<h1><b><?php echo $datos['anio'] ?></b></h1>
	</div>
</div>

<div class="fullcont">
	<div class="row">
		<div class="col-xs-2">
			<div class="redbox mestitle">
				<?php echo $datos['mes'] ?>
			</div>
		</div>
		<div class="col-xs-8">

		</div>
	</div>
</div>
<?php } ?>
<div class="fullcont">
	<div class="row">
		<div class="col-xs-6 margtop">
			<div class="row">
		      <div class="col-xs-6 brddate">
		      	<div class="bigdate">
		      		<?php echo $datos['dia'] ?>
		      	</div>
		      </div>
		      <div class="col-xs-6">
		      	<div class="smallcurso">
					<div class="smallcurso-img"><img src="images/cursos-prin-tab1.jpg"></div>
					<div class="smallcurso-txt"><a href="index.php?secc=curso-jugando-aprendo">JUGANDO APRENDO</a></div>
				</div>
		      </div>
		    </div>
		</div>		
	</dib>
</div>

    
<div class="fullcont">
	<div class="row">
		<div class="col-xs-2">
			<div class="redbox mestitle">
				Febrero
			</div>
		</div>
		<div class="col-xs-8">

		</div>
	</div>
</div>

<div class="fullcont">
	<div class="row">
<hr>
	</div>
	
</div>

<div class="fullcont">
	<div class="row">
		<div class="col-xs-2">
			<div class="redbox mestitle">
				Marzo
			</div>
		</div>
		<div class="col-xs-8">

		</div>
	</div>
</div>

<div class="fullcont">
	<div class="row">
		<div class="col-xs-6 margtop">
			<div class="row">
		      <div class="col-xs-6 brddate">
		      	<div class="bigdate">
		      		19
		      	</div>
		      </div>
		      <div class="col-xs-6">
		      	<div class="smallcurso">
					<div class="smallcurso-img"><img src="images/Material_WEB_preview-Fotolectura.jpg"></div>
					<div class="smallcurso-txt"><a href="index.php?secc=curso-foto-lectura">FOTO LECTURA</a></div>
				</div>
		      </div>
		    </div>
		</div>

		<div class="col-xs-6 margtop">
			<div class="row">
		      <div class="col-xs-6 brddate">
		      	<div class="bigdate">
		      		20
		      	</div>
		      </div>
		      <div class="col-xs-6">
		      	<div class="smallcurso">
					<div class="smallcurso-img"><img src="images/Material_WEB_preview-Fotolectura.jpg"></div>
					<div class="smallcurso-txt"><a href="index.php?secc=curso-foto-lectura">FOTO LECTURA</a></div>
				</div>
		      </div>
		    </div>
		</div>
	</div>
</div>