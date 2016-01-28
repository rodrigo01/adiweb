<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Panel de Control</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo $baseurl;?>js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo $baseurl;?>js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo $baseurl;?>js/ie10-viewport-bug-workaround.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $baseurl;?>css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo $baseurl;?>css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo $baseurl;?>css/dashboard.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $baseurl;?>administrador/">Panel de Control</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">           
            <li><a href="<?php echo $baseurl;?>administrador/login/logout">Salir</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">

      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar"> 
            <li><a href="<?php echo $baseurl?>administrador/usuario/lista">Usuarios</a></li>
            <li><a href="<?php echo $baseurl?>administrador/slider">Sliders</a></li>
            <li><a href="<?php echo $baseurl?>administrador/contacto/lista">Contactos</a></li>
            <li><a href="<?php echo $baseurl?>administrador/actividad/lista">Cursos y/o Talleres</a></li>
            <li><a href="<?php echo $baseurl?>administrador/inscripcion/lista">Alumnos Registrados en Cursos y Talleres</a></li>
            <li><a href="#">Calendario</a></li>
            <li><a href="<?php echo $baseurl?>administrador/testimonio/lista">Testimonios</a></li>
            <li><a href="<?php echo $baseurl?>administrador/nosotros/lista">Nosotros</a></li>
            <li><a href="<?php echo $baseurl?>administrador/producto/lista">Productos</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">