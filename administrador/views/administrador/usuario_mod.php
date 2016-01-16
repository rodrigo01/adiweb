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
            <li><a href="#">Perfil</a></li>
            <li><a href="<?php echo $baseurl?>login/logout">Salir</a></li>
          </ul>
        </div>
      </div>
    </nav>
  
<div class="container">
	<h3>Modificar Usuario</h3>
	<form action="<?php echo $baseurl;?>usuario/updateusuario" method="POST">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Nombre del Usuario</div>		
			<div class="col-md-4"> <input type="text" name="nombreUsuario" class="form-control" value="<?php echo $administrador->nombre_administrador; ?>" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Usuario</div>
			<div class="col-md-4"> <input type="text" name="usuario" class="form-control" value="<?php echo $administrador->apellido_administrador; ?>" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Clave</div>
			<div class="col-md-4"> <input type="password" name="password" class="form-control" maxlength="10" pattern="([0-9]*)" value="<?php echo $administrador->telefono_administrador; ?>" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Correo</div>
			<div class="col-md-4"> <input type="email" name="email" class="form-control" value="<?php echo $administrador->telefono_administrador; ?>" required/></div>
		</div>
		</div><div class="form-group"><div class="row">			
			<div class="col-md-4"> <input type="hidden" name="idAdministrador" class="form-control" value="<?php echo $administrador->id_administrador; ?>" required/></div>
		</div>                    
		<div>
                    <input type="submit" class="btn btn-success" value="Modificar" class="btn btn-succcess" name="mod_administrador"/>
		</div>
	</form>
</div>
</body>
</html>