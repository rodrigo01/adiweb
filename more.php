<?php
include('config-site.php');
include('administrador/corelib.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADi</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/estiloadi.css">
	<!-- Include the plugin *after* the jQuery library -->
	<script src="js/bjqs-1.3.min.js"></script>
	<!-- Include the basic styles -->
	<link type="text/css" rel="Stylesheet" href="bjqs.css" />
</head>
<body>
<div id="wsite">
	<div id="wheader">
		<div id="menuheader">
			<div class="margcont">
				<ul class="topmenu">
					<li><a href="index.php">INICIO</a></li>
					<li><a href="index.php?secc=nosotros">NOSOTROS</a></li>
					<li><a href="index.php?secc=cursos">CURSOS</a></li>
					<li><a href="index.php?secc=taller">TALLERES</a></li>
					<li><a href="index.php?secc=calendario">CALENDARIO</a></li>
					<li><a href="index.php?secc=tienda">TIENDA</a></li>
					<li><a href="index.php?secc=testimonios">TESTIMONIOS</a></li>
					<li><a href="index.php?secc=contacto">CONTACTO</a></li>
				</ul>
				<div class="iconsocial">
					<a href="https://www.facebook.com/arturoarellano.mx"><img src="images/fb-icon.png"></a> <a href="https://twitter.com/CoachArturoA"><img src="images/tw-icon.png"></a> <a href="https://www.instagram.com/coacharturoarellano/"><img src="images/rss-icon.png"></a> <a href="https://www.youtube.com/user/adiarturoarellano"><img src="images/gplus-icon.png"></a>
				</div>
			</div>
		</div>
		<div id="header">
			<div class="margcont">
				<div id="logocont">
					<img src="images/logotop.png">
				</div>
				<!-- codigo
				<div id="searchtop">
					<div>
						<a href="#"><img src="images/searchbtn.png"></a>
						<input type="text" placeholder="Buscar cursos">
					</div>
				</div>

				-->
			</div>
		</div>
	</div>

	<div id="wcontent">
		<div id="content">
			<div class="margcont">
				<?php
				$producto = '';
				if(isset($_GET['producto'])){
					$producto = trim($_GET['producto']);
				}
				if($producto==''){
					include('principal.php');
				}else{
					include('producto.php');
				}
				?>
			</div>
		</div>		
	</div>

	<div id="wfooter">
		<div id="footerbar">
			<div class="margcont">
				<div class="footerlinks">
					<a href="#">Aviso legal</a> | <a href="#">Condiciones de pago y envío</a> | <a href="#">Política de privacidad</a> | <a href="#">Mapa del sitio</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>