<?php
include('config-site.php');
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADi</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estiloadi.css">
	<script src="js/bjqs-1.3.min.js"></script>
	<link type="text/css" rel="Stylesheet" href="bjqs.css" />
</head>
<body>
<div id="wsite">
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Arturo Arellano</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">INICIO</a></li>
			<li><a href="index.php?secc=nosotros">NOSOTROS</a></li>
			<li><a href="index.php?secc=cursos">CURSOS</a></li>
			<li><a href="index.php?secc=taller">TALLERES</a></li>
			<li><a href="index.php?secc=calendario">CALENDARIO</a></li>
			<li><a href="index.php?secc=tienda">TIENDA</a></li>
			<li><a href="index.php?secc=testimonios">TESTIMONIOS</a></li>
			<li><a href="index.php?secc=contacto">CONTACTO</a></li>
          </ul>
          <div class="nav navbar-nav navbar-right redessociales">
            	<a href="https://www.facebook.com/arturoarellano.mx"><img src="images/fb-icon.png"></a> <a href="https://twitter.com/CoachArturoA"><img src="images/tw-icon.png"></a> <a href="https://www.instagram.com/coacharturoarellano/"><img src="images/rss-icon.png"></a> <a href="https://www.youtube.com/user/adiarturoarellano"><img src="images/gplus-icon.png"></a>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div id="wheader">
		<div id="header">
			<div class="container">
				<div id="logocont">
					<img src="images/logotop.png">
				</div>
			</div>
		</div>
	</div>

	<div id="wcontent">
		<div id="content">
			<div class="container">
				<?php
				$secc = '';
				if(isset($_GET['secc'])){
					$secc = trim($_GET['secc']);
				}
				if($secc==''){
					include('principal.php');
				}else{
					if(file_exists($secc.'.php')){
						include($secc.'.php');
					}
					else{
						include('error404.php');
					}
				}
				?>
			</div>
		</div>
		
	</div>

	<div id="wfooter">
		<div id="footerbar">
			<div class="container">
				<div class="footerlinks">
					<a href="#">Aviso legal</a> | <a href="#">Condiciones de pago y envío</a> | <a href="#">Política de privacidad</a> | <a href="#">Mapa del sitio</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>