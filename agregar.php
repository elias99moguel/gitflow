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

    if($ejecutar) {
      echo "<script>alert('Se ha agregado un nuevo empleado correctamente, actualice la pagina para ver los cambios');
      window.location='/gitflow/index.php';</script>";
    }else{
      echo "<script>alert('No se pudieron guardar los datos); window.history.go(-1);</script>";
    }

    // echo "success";

    mysqli_close($conexion);
?>