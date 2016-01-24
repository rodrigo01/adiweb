<div class="container">
	<h3>Eliminar Usuario</h3>
	<form action="<?php echo $baseurl;?>administrador/usuario/deleteusuario" method="POST">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Nombre de Usuario</div>		
			<div class="col-md-4"><?php echo $usuario['nombre_usuario']; ?></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Usuario</div>
			<div class="col-md-4"><?php echo $usuario['user_usuario']; ?></div>
		</div>		
                </div><div class="form-group"><div class="row">
			<div class="col-md-2">Correo</div>
			<div class="col-md-4"><?php echo $usuario['correo_usuario']; ?></div>
		</div>		
                </div><div class="form-group"><div class="row">			
			<div class="col-md-4"> <input type="hidden" name="idUsuario" class="form-control" value="<?php echo $usuario['id_usuario']; ?>" required/></div>
		</div>                    
		<div>
                    <input type="submit" class="btn btn-success" value="Eliminar" class="btn btn-succcess" name="eli_administrador"/>
		</div>
	</form>
</div>
</div>