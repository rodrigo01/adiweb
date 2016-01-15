<div class="fullcont">
	<div class="titlebox">
		<h1>CONTÁCTANOS</h1>
	</div>
	<div class="redbarlol">

	</div>
</div>
<div class="fullcont">
	<div id="boxnosotros" style="padding:15px;">
		<div class="row">
			<div class="col-xs-6">
				<b><p>
					Visite nuestras oficinas para atenderlo personalmente.
				</p>
				<p>
					Teléfono: 686-556-4030<br>
					Lago Nasser #1242,<br>
					Jardines del Lago C.P. 21330,<br>
					Mexicali, Baja California, México. <br>
				</p></b>
				<div>
					<iframe src="//maps.google.com/maps?v=2&amp;f=q&amp;ie=UTF8&amp;t=m&amp;iwloc=&amp;q=Lago+Nasser+%231242%2c+Jardines+del+Lago+C.P.+21330%2c+++Mexicali%2c+Baja+California%2c+M%c3%a9xico.&amp;hl=en&amp;z=16&amp;source=s_q&amp;output=embed" style="width: 100%;" height="200" scrolling="yes"></iframe>	
				</div>
				
			</div>
			<div class="col-xs-6">
				<?php 
					if(isset($_POST['nombre'])){

						$to = 'g.blancarte@arturoarellano.com';

						$subject = 'Contacto desde ArturoArellano.com';

						$headers = "From: Pagina ArturoArellano<noreply@arturoarellano.com>\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

						$message = "";
						$message .= "<br>Nombre: ".$_POST['nombre'];
						$message .= "<br>Correo ".$_POST['correo'];
						$message .= "<br>Telefono ".$_POST['telefono'];
						$message .= "<br>Como: ".$_POST['como'];
						$message .= "<br>Comentarios:<br>".$_POST['comentarios'];


						mail($to, $subject, $message, $headers);

						?>
						<h3>Tu mensaje se ha enviado satisfactoriamente</h3>
						<?
					}else{
				?>
					<form action="index.php?secc=contacto" method="POST">
						<div class="row formpad">
							<div class="col-xs-4 col-sm-4">
								<b>Nombre</b>
							</div>
							<div class="col-xs-4 col-sm-6">
								<input type="text" class="form-control" name="nombre">
							</div>
						</div>
						<div class="row formpad">
							<div class="col-xs-4 col-sm-4">
								<b>Correo</b>
							</div>
							<div class="col-xs-4 col-sm-6">
								<input type="text" class="form-control" name="correo">
							</div>
						</div>
						<div class="row formpad">
							<div class="col-xs-4 col-sm-4">
								<b>Tel&eacute;fono</b>
							</div>
							<div class="col-xs-4 col-sm-6">
								<input type="text" class="form-control" name="telefono">
							</div>
						</div>
						<div class="row formpad">
							<div class="col-xs-4 col-sm-4">
								<b>Como te enteraste</b>
							</div>
							<div class="col-xs-4 col-sm-6">
								<textarea class="form-control" name="como"></textarea>
							</div>
						</div>
						<div class="row formpad">
							<div class="col-xs-4 col-sm-4">
								<b>Comentarios</b>
							</div>
							<div class="col-xs-4 col-sm-6">
								<textarea class="form-control" name="comentarios"></textarea>
							</div>
						</div>
						<div class="row formpad">
							<div class="col-xs-4 col-sm-4">
							</div>
							<div class="col-xs-4 col-sm-6">
								<input type="submit" value="Enviar" class="btn btn-danger" style="width:100%; box-shadow: 0 0 10px #191414;">
							</div>
						</div>
					</form>
				<?php }	?>
				
			</div>
		</div>
	</div>
</div>