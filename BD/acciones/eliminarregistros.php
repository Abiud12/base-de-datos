<?php

include ('../conec.php');

$codigo= $_GET['id'];

$eliminarregistros = "DELETE FROM registros WHERE codigo = '$codigo'";

$resultado = mysqli_query($conexion, $eliminarregistros);

if(!$resultado){
    echo '<script>alert("Los datos no se eliminaron."</script>';
}else{
    echo '<script>alert("Los datos se eliminaron."</script>';
}

header('Location: ../registros.php');
?>