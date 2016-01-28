<div class="row">
    <div class="col-md-4">
      <h3>Lista de Alumnos Inscritos</h3>
    </div>
    <div class="col-md-2">
      <br><a class="btn btn-info" href="<?php echo $baseurl;?>administrador/inscripcion/agregarinscripcion">Inscribir Alumno</a>
    </div>
  </div>
<br><table class="table">
  <tr>
    <th>Nombre Y Apellido</th>
    <th>Numero de Identidad</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Fecha de Inscripcion del Alumno</th>
    <th>Curso o Taller</th>
    <th>Estatus de Pago</th>
    <th>Acciones</th>
  </tr>
  <?php
   $objInscripcion=new Inscripciones();
   $res=$objInscripcion->getInscripciones();
   while ($datos = mysql_fetch_array($res)){
   ?>
  <tr>
    <td><?php echo $datos['nombre_apellido_alumno']; ?></td>
    <td><?php echo $datos['identificacion_alumno']; ?></td>
    <td><?php echo $datos['telefono_alumno']; ?></td>
    <td><?php echo $datos['correo_alumno']; ?></td>
    <td>
        <?php        
            $fecha=$datos['fecha_inscripcion_alumno']; 
            echo date("d-m-Y",strtotime($fecha));      
        ?>
    </td>
    <td><?php echo $datos['curso']; ?></td>
    <td><?php echo $datos['pago_alumno']; ?></td>
    <td>
      <a class="btn btn-info" style="display:inline-block" href="<?php echo $baseurl.'administrador/inscripcion/editarinscripcion/'.$datos['id_inscripcion']?>">Modificar</a>
      <a class="btn btn-warning" style="display:inline-block;margin-top:5px;" href="<?php echo $baseurl.'administrador/inscripcion/borrarinscripcion/'.$datos['id_inscripcion']?>">Eliminar</a>
    </td>
  </tr>
  <?php } ?>
</table>

