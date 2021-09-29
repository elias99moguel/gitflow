<?php
include 'conexion.php';
$id=$_GET['id'];


$query = "DELETE FROM empresa WHERE Id_Empleado='$id'";
$ejecutar = mysqli_query($conexion,$query) or die ("Error al eliminar, por favor llame a Andrea");

if($ejecutar){
    echo "<script>alert('Se han eliminado el dato');
    window.location='/gitflow/index.php';</script>";
}else{
    echo "<script>alert(No se pudieron eliminar los datos ); window.history.go(-1);</script>";
  }


  mysqli_close($conexion);
?>