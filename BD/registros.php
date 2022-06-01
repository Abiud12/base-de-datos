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
    <title>Registros</title>
  </head>
  <body>
    <h3>Crear nuevo registro</h3>
    <form action = "registroregistros.php" method="post">
      <div class="mb-3">
        <label class="form-label">Ingresa el nombre</label>
        <input
          type="text"
          class="form-control"
          name="nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Ingresa el apellido paterno</label>
        <input
          type="text"
          class="form-control"
          name="apellido_paterno">
      </div>
      <label class="form-label">Ingresa el apellido materno</label>
        <input
          type="text"
          class="form-control"
          name="apellido_materno">
      </div>
      </div>
      <label class="form-label">Ingresa el telefono</label>
        <input
          type="text"
          class="form-control"
          name="telefono">
      </div>
      </div>
      <label class="form-label">Ingresa el correo</label>
        <input
          type="text"
          class="form-control"
          name="correo">
      </div>
      </div>
      <label class="form-label">Ingresa el usuario</label>
        <input
          type="text"
          class="form-control"
          name="usuario">
      </div>
      </div>
      <label class="form-label">Ingresa el contrasenia</label>
        <input
          type="text"
          class="form-control"
          name="contrasenia">
      </div>
      <input type="submit" name="Enviar" value="Insertar registro nuevo" class="btn btn-primary"/>
    </form>
    <!--Inicio de la tabla-->
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido paterno</th>
      <th scope="col">Apellido materno</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Usuario</th>
      <th scope="col">contrasenia</th>
      <th scope="col">Eliminar</th>
</tr>
</thead>
<tbody>
<?php
include ('conec.php');//Conexión a la Base de Datos//
$consulta = "SELECT * FROM registros";
$resultado =mysqli_query($conexion, $consulta);
while($fila= mysqli_fetch_array($resultado)){
?>
  <tr>
    <th scope="row"><?php echo $fila ["codigo"] ?></th>
    <td><?php echo $fila ["nombre"] ?></td>
    <td><?php echo $fila ["apellido_paterno"] ?></td>
    <td><?php echo $fila ["apellido_materno"] ?></td>
    <td><?php echo $fila ["telefono"] ?></td>
    <td><?php echo $fila ["correo"] ?></td>
    <td><?php echo $fila ["usuario"] ?></td>
    <td><?php echo $fila ["contrasenia"] ?></td>
 
     <!--Fin de la tabla-->
   
  </body>
</html>