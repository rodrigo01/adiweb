<div class="row">
    <div class="col-md-4">
      <h3>Lista de Testimonios</h3>
    </div>
    <div class="col-md-2">
      <br><a class="btn btn-info" href="<?php echo $baseurl;?>administrador/testimonio/agregartestimonio">Crear Testimonio</a>
    </div>
  </div>
<br><table class="table">
  <tr>
    <th>Testimonio</th>
    <th>Imagen</th>
    <th>Enlace de video</th>
    <th>Cliente</th>
    <th>Acciones</th>
  </tr>
  <?php
   $objTestimonio=new Testimonios();
   $res=$objTestimonio->getTestimonio();
   while ($datos = mysql_fetch_array($res)){
   ?>
  <tr>
    <td><?php echo $datos['contenido_testimonio']; ?></td>
    <td><img src="<?php echo $baseurl; ?>images/<?php echo $datos['img_testimonio']?>"></td>
    <td><?php echo $datos['video_testimonio']; ?></td>
    <td><?php echo $datos['cliente_testimonio']; ?></td>    
    <td>
      <a class="btn btn-info" href="<?php echo $baseurl.'administrador/testimonio/editartestimonio/'.$datos['id_testimonio']?>">Modificar</a>&nbsp; 
      <a class="btn btn-warning" href="<?php echo $baseurl.'administrador/testimonio/borrartestimonio/'.$datos['id_testimonio']?>">Eliminar</a>
    </td>
  </tr>
  <?php } ?>
</table>