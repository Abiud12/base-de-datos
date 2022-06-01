<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Fabricante</title>
  </head>
  <body>
    <h3>Crear fabricante</h3>
    <form action = "registrofabricante.php" method="post">
      <div class="mb-3">
        <label class="form-label">Ingresa el nombre del fabricante</label>
        <input
          type="text"
          class="form-control"
          name="nomFabricante">
      </div>
      <input type="submit" name="Enviar" value="Insertar fabricante" class="btn btn-primary"/>
    </form>
    <!--Inicio de la tabla-->
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">fabricante</th>
      <th scope="col">Eliminar</th>
</tr>
</thead>
<tbody>
<?php
include ('conec.php');//Conexión a la Base de Datos//
$consulta = "SELECT * FROM fabricante";
$resultado =mysqli_query($conexion, $consulta);
while($fila= mysqli_fetch_array($resultado)){
?>
  <tr>
    <th scope="row"><?php echo $fila ["codigo"] ?></th>
    <td><?php echo $fila ["nombre"] ?></td>
    <!--Boton Eliminar-->
    <td><a target="self" href="acciones/eliminarFabricante.php?id=<?php echo $fila ["codigo"] ?>"><i class="bi bi-trash text-danger"></i></td>
</tr>
<?php } ?>
</tbody>
</table>
     <!--Fin de la tabla-->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  </body>
</html>