<?php 
 

include "conexion.php";
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $correo = $_POST['correo'];

  //$query = "INSERT INTO 'empresa' ('Nombre','Correo','fecha_I') VALUES ('$nombre','$correo','$fechanac');";
   //$query = "INSERT INTO `empresa` (`Nombre`, `Correo`, `fecha_I`) VALUES ('$nombre', '$correo', '$fechanac');";
   $sentencia = $base_de_datos->prepare("INSERT INTO empresa (nombre, correo, fecha_i) VALUES  (?, ?, ?);");
   $resultado = $sentencia->execute([$nombre, $correo, $fecha]); 
   // echo $query;

    //$ejecutar = mysqli_query($conexion,$query)or die("error de registro");

    if($resultado===true) {
      header("Location: index.php");
    } else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
  }

    // echo "success";




  
?>