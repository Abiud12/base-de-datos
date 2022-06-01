<?php

include ('../conec.php');

$codigoFabricante= $_GET['id'];

$eliminarFabricante = "DELETE FROM fabricante WHERE codigo = '$codigoFabricante'";

$resultado = mysqli_query($conexion, $eliminarFabricante);

if(!$resultado){
    echo '<script>alert("Los datos no se eliminaron."</script>';
}else{
    echo '<script>alert("Los datos se eliminaron."</script>';
}

header('Location: ../fabricante.php');
?>