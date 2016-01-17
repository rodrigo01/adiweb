	<h3>Agregar Usuario</h3>
	<form action="<?php echo $baseurl;?>administrador/usuario/addusuario" method="POST" name="form" onSubmit="return validar_clave()">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Nombre del Usuario</div>		
			<div class="col-md-4"><input type="text" name="nombreUsuario" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Correo</div>
			<div class="col-md-4"> <input type="email" name="email" class="form-control" id="correoUsuario" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Usuario:</div>
			<div class="col-md-4"> <input type="text" name="usuario" class="form-control" id="usuario" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Contraseña:</div>
			<div class="col-md-4"> <input type="password" name="password" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Repetir Contraseña:</div>
			<div class="col-md-4"> <input type="password" name="password2" class="form-control" required/></div>
		</div>
		</div>
		<div>
			<input type="submit" class="btn btn-success" value="Agregar" class="btn btn-succcess" name="agr_usuario"/>
		</div>
	</form>
<script>  
    function validar_clave() {
        var caract_invalido = " ";
        var caract_longitud = 6;
        var clave_primera = document.form.password.value;
        var clave_segunda = document.form.password2.value;
            if (clave_primera == '' || clave_segunda == '') {
                alert('Debes introducir tu clave en los dos campos.');
                return false;
            }
            if (document.form.password.value.length < caract_longitud) {
                alert('Tu clave debe constar de ' + caract_longitud + ' caracteres.');
                return false;
            }
            if (document.form.password.value.indexOf(caract_invalido) > -1) {
                alert("Las claves no pueden contener espacios");
                return false;
            }
            else {
                if (clave_primera != clave_segunda) {
                alert ("Las claves introducidas no son iguales");
                return false;
                }
               return true;
            }
       }
</script>