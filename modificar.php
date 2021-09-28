<?php 

  include 'conexion.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fechanac = $_POST['fecha'];
    $correo = $_POST['correo'];
   

   //actualizar los datos
   $actualizar = "UPDATE empresa SET Nombre='$nombre', Correo='$correo', fecha_I='$fechanac' WHERE Id_Empleado='$id'";

 

    $ejecutar = mysqli_query($conexion,$actualizar)or die("error de registro");
    
    if($ejecutar) {
      echo "<script>alert('Se han actualizado los cambios correctamente, actualice la pagina para ver los cambios');
      window.location='/gitflow/index.php';</script>";
    }else{
      echo "<script>alert('No se pudieron guardar los datos); window.history.go(-1);</script>";
    }
  
    // echo "success";

    mysqli_close($conexion);
?>