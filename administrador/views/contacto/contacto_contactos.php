<div class="row">
    <div class="col-md-4">
      <h3>Lista de Parametros de Contactos</h3>
    </div>
    <div class="col-md-2">      
    </div>
  </div>
<br><table class="table">
  <tr>
    <th>Atencion Contacto</th>
    <th>Direccion Contacto</th>
    <th>Parametro Nombre Contacto</th>
    <th>Parametro Correo Contacto</th>
    <th>Parametro Como te Enteraste Contacto</th>
    <th>Parametro Comentarios Contacto</th>
    <th>Telefono Empresa Contacto</th>
    <th>Acciones</th>
  </tr>
  <?php
   $objContacto=new Contactos();
   $res=$objContacto->get();
   while ($datos = mysql_fetch_array($res)){
   ?>
  <tr>
    <td><?php echo $datos['atencion_contacto']; ?></td>
    <td><?php echo $datos['direccion_contacto']; ?></td>
    <td><?php echo $datos['nombre_contacto']; ?></td>
    <td><?php echo $datos['correo_contacto']; ?></td>    
    <td><?php echo $datos['como_te_enteraste_contacto']; ?></td> 
    <td><?php echo $datos['comentarios_contactos']; ?></td> 
    <td><?php echo $datos['telefono_empresa']; ?></td> 
    <td>
      <a class="btn btn-info" href="<?php echo $baseurl.'administrador/contacto/editarcontacto/'.$datos['id_contacto']?>">Modificar</a>
    </td>
  </tr>
  <?php } ?>
</table>