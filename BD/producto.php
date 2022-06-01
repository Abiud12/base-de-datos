<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Producto</title>
</head>
<body>
    <h3>Crear producto</h3>
    <form action = "registroproducto.php" method ="post">
    <div class="mb-3">
        <label class="form-label">Ingresa el nombre del producto</label>
    <input
    type="text"
    class="form-control"
    name="nomProducto" required/>
    </div> 
    <div class="mb-3">
        <label class="form-label">Ingresa el precio del producto</label>
    <input
    type="text"
    class="form-control"
    name="precioProducto" required/>
    <div class="mb-3">
        <label class="form-label">Ingresa el codigo del producto</label>
    <input
    type="text"
    class="form-control"
    name="codProducto" required/>

    <input type="submit" name="Enviar" value="Insertar producto" class="btn btn-primary"/>
</form>

<!--Inicio de la tabla-->
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Nombre del producto</th>
      <th scope="col">Precio</th>
      <th scope="col">Nombre de Fabricante</th>
      <th scope="col">Eliminar</th>
</tr>
</thead>
<tbody>
<?php
include ('conec.php');/*Conexión a la Base de Datos*/
$Consultados = "SELECT producto.codigo, producto.nombre, producto.precio, fabricante.nombre AS fabricante FROM producto
INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo";
$resultado =mysqli_query($conexion, $Consultados);
while($fila= mysqli_fetch_array($resultado)){
?>
  <tr>
    <th scope="row"><?php echo $fila ["codigo"] ?></th>
    <td><?php echo $fila ["nombre"] ?></td>
    <td><?php echo $fila ["precio"] ?></td>
    <td><?php echo $fila ["fabricante"] ?></td>
      <!--Boton Eliminar-->
      <td><a target="self" href="acciones/eliminarProducto.php?id=<?php echo $fila ["codigo"] ?>"><i class="bi bi-trash text-danger"></i></td>
</tr>
<?php } ?>
</tbody>
</table>
     <!--Fin de la tabla-->

</body>
</html>