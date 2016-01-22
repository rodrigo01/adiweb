<div class="row">
    <div class="col-md-4">
      <h3>Lista de Actividades</h3>
    </div>
    <div class="col-md-2">
      <br><a class="btn btn-info" href="<?php echo $baseurl;?>administrador/actividad/agregaractividad">Crear Actividad</a>
    </div>
  </div>
<br><table class="table">
  <tr>
    <th>Titulo de Actividad</th>
    <th>Costo</th>
    <th>Imagen</th>
    <th>Tipo de Actividad</th>
    <th>Acciones</th>
  </tr>
  <?php
   $objActividad=new Actividades();
   $res=$objActividad->getActividadOnly();
   while ($datos = mysql_fetch_array($res)){
   ?>
  <tr>
    <td><?php echo $datos['nombre_actividad']; ?></td>
    <td><?php echo $datos['costo_actividad']; ?></td>
    <td><img width="270" height="137" src="<?php echo $baseurl; ?>images/<?php echo $datos['img_actividad']?>"></td>
    <td><?php echo $datos['tipo_actividad']; ?></td>
    <td>
      <a class="btn btn-info" href="<?php echo $baseurl.'administrador/actividad/editaractividad/'.$datos['id_actividad']?>">Modificar</a>&nbsp; 
      <a class="btn btn-warning" href="<?php echo $baseurl.'administrador/actividad/borraractividad/'.$datos['id_actividad']?>">Eliminar</a>
    </td>
  </tr>
  <?php } ?>
</table>
