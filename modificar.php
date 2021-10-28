<?php 

  include 'conexion.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $correo = $_POST['correo'];



  $sentencia = $base_de_datos->prepare("UPDATE empresa SET nombre = ?, correo = ?, fecha_i = ? WHERE id_empleado = ?;");
  $resultado = $sentencia->execute([$nombre,$correo, $fecha,$id]); # Pasar en el mismo orden de los ?
  if ($resultado === true) {
      header("Location: index.php");
  } else {
      echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
  }
   

   //actualizar los datos
   
?>