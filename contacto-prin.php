<?php
  $objContactos=new Contactos();
  $res=$objContactos->get();
  if ($datos = mysql_fetch_array($res)){
?>
<div class="fullcont">
	<div id="boxnosotros" style="padding:15px;margin-top:15px">
		<h1 style="text-align: center; font-weight: bold;">CONT&Aacute;CTANOS</h1>
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<b><p>
					<?php echo $datos['atencion_contacto'] ?>
				</p>
				<p>
					<?php echo $datos['direccion_contacto'] ?><br>
				</p></b>
				<div>
					<iframe src="<?php echo $datos['map_contacto'] ?>" style="width: 100%;" height="200" scrolling="yes"></iframe>	
				</div>
				
			</div>
			<div class="col-xs-12 col-md-6">
				
					<form action="index.php?secc=contacto" method="POST">
						<div class="row formpad">
							<div class="col-xs-12 col-sm-4">
								<b><?php echo $datos['nombre_contacto'] ?></b>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input type="text" class="form-control" name="nombre">
							</div>
						</div>
						<div class="row formpad">
							<div class="col-xs-12 col-sm-4">
								<b><?php echo $datos['correo_contacto'] ?></b>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input type="text" class="form-control" name="correo">
							</div>
						</div>
						<div class="row formpad">
							<div class="col-xs-12 col-sm-4">
								<b><?php echo $datos['telefono_contacto'] ?></b>
							</div>
							<div class="col-xs-6 col-sm-6">
								<input type="text" class="form-control" name="telefono">
							</div>
						</div>
						<div class="row formpad">
							<div class="col-xs-12 col-sm-4">
								<b><?php echo $datos['como_te_enteraste_contacto'] ?></b>
							</div>
							<div class="col-xs-6 col-sm-6">
								<textarea class="form-control" name="como"></textarea>
							</div>
						</div>
						<div class="row formpad">
							<div class="col-xs-12 col-sm-4">
								<b><?php echo $datos['comentarios_contactos'] ?></b>
							</div>
							<div class="col-xs-6 col-sm-6">
								<textarea class="form-control" name="comentarios"></textarea>
							</div>
						</div>
						<div class="row formpad">
							<div class="col-xs-12 col-sm-4">
							</div>
							<div class="col-xs-12 col-sm-6">
								<input type="submit" value="Enviar" class="btn btn-danger" style="width:100%; box-shadow: 0 0 10px #191414;">
							</div>
						</div>
					</form>
				
				
			</div>
		</div>
	</div>
</div>
<?php } ?>