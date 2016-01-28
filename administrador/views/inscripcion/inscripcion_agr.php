<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
    webshims.setOptions('waitReady', false);
    webshims.setOptions('forms-ext', {types: 'date'});
    webshims.polyfill('forms forms-ext');    
</script>

<h3>Formulario de Inscripcion</h3>
	<form action="<?php echo $baseurl;?>administrador/inscripcion/addinscripcionalumnoadministrador" method="POST" enctype="multipart/form-data">
		<div class="form-group"><div class="row">
			<div class="col-md-2">Nombre y Apellido</div>		
			<div class="col-md-4"> <input type="text" name="nombreApellido" class="form-control" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Numero de Identificacion</div>
			<div class="col-md-4"> <input type="text" name="identificacion" class="form-control" id="correoUsuario" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Telefono</div>
			<div class="col-md-4"> <input type="tel" name="telefono" maxlength="10" class="form-control" id="correoUsuario" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Correo</div>
			<div class="col-md-4"> <input type="email" name="correo" class="form-control" id="correoUsuario" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Fecha Actual</div>
			<div class="col-md-4"> <input name="fechaInicio" value="<?php echo date("Y-m-d"); ?>" class="form-control" type="date" required/></div>
		</div>
		</div><div class="form-group"><div class="row">
			<div class="col-md-2">Curso o Taller</div>
			<div class="col-md-4"> 
                        <select name="" onchange="mostrarValor(this.value);" required>                            
                            <option value="">Seleccionar..</option>
                             <?php
                                $objActividades=new Actividades();
                                $res=$objActividades->getActividad();
                                while ($datos = mysql_fetch_array($res)){
                            ?>
                            <option value="<?php echo $datos['nombre_actividad']?>"><?php echo $datos['nombre_actividad'] ?></option>                  
                            <?php } ?>
                        </select>  
                 <input type="hidden" name="nombreActividad" id="nombre_actividad" value="" class="form-control" required/>
                        </div>
		</div>
		</div>                
                                 
                <input type="hidden" name="pago" value="pendiente" class="form-control" required/>
		<div>
			<input type="submit" class="btn btn-success" value="Inscribir" class="btn btn-succcess" name="submit"/>
		</div>
	</form>
<script>  
    var mostrarValor = function(x){
        document.getElementById('nombre_actividad').value=x;
        }
</script>
