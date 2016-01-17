<div class="row">
    <div class="col-md-4">
      <h3>Lista de Usuarios</h3>
    </div>
    <div class="col-md-2">
      <br><a class="btn btn-info" href="<?php echo $baseurl;?>administrador/usuario/agregarusuario">Crear Usuario</a>
    </div>
  </div>
<br><table class="table">
  <tr>
    <th>Nombre</th>
    <th>User</th>
    <th>correo</th>
    <th>Acciones</th>
  </tr>
  <?php
   $objUsuario=new Usuarios();
   $res=$objUsuario->getUserGeneral();
   while ($datos = mysql_fetch_array($res)){
   ?>
  <tr>
    <td><?php echo $datos['nombre_usuario']; ?></td>
    <td><?php echo $datos['user_usuario']; ?></td>
    <td><?php echo $datos['correo_usuario']; ?></td>    
    <td>
      <a class="btn btn-info" href="<?php echo $baseurl.'administrador/usuario/editarusuario/'.$datos['id_usuario']?>">Modificar</a> 
      <a class="btn btn-warning" href="<?php echo $baseurl.'administrador/usuario/borrarusuario/'.$datos['id_usuario'];?>">Eliminar</a>
    </td>
  </tr>
  <?php } ?>
</table>