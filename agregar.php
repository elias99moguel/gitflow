<?php 

  include 'conexion.php';

    $nombre = $_POST['nombre'];
    $fechanac = $_POST['fecha'];
    $correo = $_POST['correo'];
   // echo $fechanac;

    //$query = "INSERT INTO 'empresa' ('Nombre','Correo','fecha_I') VALUES ('$nombre','$correo','$fechanac');";
   $query = "INSERT INTO `empresa` (`Nombre`, `Correo`, `fecha_I`) VALUES ('$nombre', '$correo', '$fechanac');";

   // echo $query;

    $ejecutar = mysqli_query($conexion,$query)or die("error de registro");

    echo "success";

    mysqli_close($conexion);
?>