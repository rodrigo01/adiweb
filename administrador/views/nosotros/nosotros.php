<div class="row">
    <div class="col-md-4">
      <h3>Lista de Parametros de Seccion Nosotros</h3>
    </div>
    <div class="col-md-2">      
    </div>
  </div>
<br><table class="table">
  <tr>
    <th>Quienes Somos</th>
    <th>Contenido Quienes Somos</th>
    <th>Titulo de Servicios</th>
    <th>Contenido de Servicios</th>
    <th>Mision</th>
    <th>Contenido Mision</th>
    <th>Acciones</th>
  </tr>
  <?php
   $objNosotros=new Nosotros();
   $res=$objNosotros->getNosotros();
   while ($datos = mysql_fetch_array($res)){
   ?>
  <tr>
    <td><?php echo $datos['quienes_somos_nosotros']; ?></td>
    <td><?php echo $datos['contenido_quienes_somos']; ?></td>
    <td><?php echo $datos['titulo_servicios_nosotros']; ?></td>
    <td><?php echo $datos['contenido_servicios_nosotros']; ?></td>    
    <td><?php echo $datos['mision_nosotros']; ?></td> 
    <td><?php echo $datos['titulo_mision_nosotros']; ?></td> 
    <td>
      <a class="btn btn-info" href="<?php echo $baseurl.'administrador/nosotros/editarnosotros/'.$datos['id_nosotros']?>">Modificar</a>
    </td>
  </tr>
  <?php } ?>
</table>