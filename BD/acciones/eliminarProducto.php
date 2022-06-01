<?php

include ('../conec.php');

$codigoProducto= $_GET['id'];

$eliminarProducto = "DELETE FROM producto WHERE codigo = '$codigoProducto'";

$resultado = mysqli_query($conexion, $eliminarProducto);

if(!$resultado){
    echo '<script>alert("Los datos no se eliminaron."</script>';
}else{
    echo '<script>alert("Los datos se eliminaron."</script>';
}

header('Location: ../Producto.php');
?>
