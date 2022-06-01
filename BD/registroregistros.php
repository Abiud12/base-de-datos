<?php
include ('conec.php');
if(isset($_POST['Enviar'])){
    $nombre = $_POST['nombre'];
    $apellido_paterno=$_POST ['apellido_paterno'];
    $apellido_materno=$_POST ['apellido_materno'];
    $telefono=$_POST ['telefono'];
    $correo=$_POST ['correo'];
    $usuario=$_POST ['usuario'];
    $contrasenia=$_POST ['contrasenia'];
    $insertarregistro="INSERT INTO registros (nombre, apellido_paterno, apellido_materno, telefono,
     correo, usuario, contrasenia) 
    VALUE ('$nombre', '$apellido_paterno', '$apellido_materno', '$telefono', '$correo', 
    '$usuario', '$contrasenia')";
    $resultado=mysqli_query($conexion, $insertarregistro);

    if(!$resultado){
        echo '<script>alert("Los datos no se insertaron."</script>';
    }else{
        echo '<script>alert("Los datos se insertaron."</script>';
    }
}
header ('location: registros.php');
?>