<h3>Modificar Usuario</h3>
<form action="<?php echo $baseurl;?>administrador/usuario/updateusuario" method="POST">
	<div class="form-group">
    <div class="row">
  		<div class="col-md-2">Nombre del Usuario</div>		
  		<div class="col-md-4"> <input type="text" name="nombreUsuario" class="form-control" value="<?php echo $usuario['nombre_usuario']; ?>" required/></div>
    </div>
	</div>

  <div class="form-group">
    <div class="row">
  		<div class="col-md-2">Usuario</div>
  		<div class="col-md-4"> <input type="text" name="usuario" class="form-control" value="<?php echo $usuario['apellido_usuario']; ?>" required/></div>
  	</div>
	</div>

  <div class="form-group">
    <div class="row">
  		<div class="col-md-2">Clave</div>
  		<div class="col-md-4"> <input type="password" name="password" class="form-control" maxlength="10" pattern="([0-9]*)" value="<?php echo $usuario['telefono_usuario']; ?>" required/></div>
  	</div>
	</div>

  <div class="form-group">
    <div class="row">
  		<div class="col-md-2">Correo</div>
  		<div class="col-md-4"> <input type="email" name="email" class="form-control" value="<?php echo $usuario['telefono_usuario']; ?>" required/></div>
  	</div>
	</div>

  <div class="form-group">
    <div class="row">			
		  <div class="col-md-4"> <input type="hidden" name="idAdministrador" class="form-control" value="<?php echo $usuario['id_usuario']; ?>" required/></div>
    </div>
  </div>
	<div class="form-group">
    <input type="submit" class="btn btn-success" value="Modificar" class="btn btn-succcess" name="mod_administrador"/>
	</div>
</form>