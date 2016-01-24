<div class="row">
    <div class="col-md-4">
      <h3>Lista de Productos</h3>
    </div>
    <div class="col-md-2">
      <br><a class="btn btn-info" href="<?php echo $baseurl;?>administrador/producto/agregarproducto">Crear Producto</a>
    </div>
  </div>
<br><table class="table">
  <tr>
    <th>Titulo de Producto</th>
    <th>Informacion de producto</th>
    <th>Precio del Producto</th>
    <th>Imagen del producto</th>
    <th>Acciones</th>
  </tr>
  <?php
   $objProducto=new Productos();
   $res=$objProducto->getProductos();
   while ($datos = mysql_fetch_array($res)){
  ?>
  <tr>
    <td><?php echo $datos['titulo_producto']; ?></td>
    <td><?php echo $datos['info_producto']; ?></td>
    <td>MX$&nbsp;<?php echo $datos['precio_producto']; ?></td>
    <td><img width="270px" height="137px" src="<?php echo $baseurl; ?>images/<?php echo $datos['imagen_producto']?>"></td>    
    <td>
      <a class="btn btn-info" href="<?php echo $baseurl.'administrador/producto/editarproducto/'.$datos['id_producto']?>">Modificar</a>&nbsp; 
      <a class="btn btn-warning" href="<?php echo $baseurl.'administrador/producto/borrarproducto/'.$datos['id_producto']?>">Eliminar</a>
    </td>
  </tr>
  <?php } ?>
</table>
