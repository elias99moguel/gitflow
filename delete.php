<?php

include 'conexion.php';
$id=$_GET['id'];

$sentencia = $base_de_datos->prepare("DELETE FROM empresa WHERE id_empleado = ?;");
$resultado = $sentencia->execute([$id]);

//$query = "DELETE FROM empresa WHERE Id_Empleado='$id'";
//$ejecutar = mysqli_query($conexion,$query) or die ("Error al eliminar, por favor llame a Andrea");

if($resultado===true) {
  header("Location: index.php");
} else {
echo "Algo salió mal. Por favor verifica que la tabla exista";
}

?>