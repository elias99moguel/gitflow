
<?php
	ob_start();
	
?>

<?php
$id_empleado = $_GET["id"];
include 'conexion.php';
$sentencia = $base_de_datos->prepare("SELECT id_empleado, nombre, correo, fecha_i FROM empresa WHERE id_empleado = ?;");
$sentencia->execute([$id_empleado]);
$empresa = $sentencia->fetchObject();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carta recomendacion</title>
  </head>
  <body>
    <br>
    <h3 align="right">YUCATAN A DIA 29 DE MES 11 DEL AÑO <?php echo $Year = date("Y");?></h3>
    <h3>A QUIEN CORRESPONDA:</h3>
    <p align="center">
      Por medio de la presente y para los fines que pretenda el interesado,hago
      de su conocimiento que recomiende ampliamente al C.
      <b><?php echo $empresa->nombre ?></b>, ya que es una persona Honesta y
      Responsable en las actividades que durante el periodo que prestó servicios
      en nuestra empresa le fueron asignadas, por tal motivo no tengo ninguna
      duda en expedir esta recomendación.</p> 
      <br>
      <p>Se extiende la presente a solicitud
      del interesado y para los fines que juzgue convenientes.</p>
    <br>
    <p align="center">FIRMA</p>
    <p align="center">_________</p>
    <p align="center"> <b> Nombre de quien Firma</b> </p>
    <p align="center"> <b> Nombre de la empresa</b> </p>
  </body>
</html>

<?php
	$html=ob_get_clean();
	//echo $html;
	
	require_once 'libreria/dompdf/autoload.inc.php';
	
	use Dompdf\Dompdf;
	$dompdf = new Dompdf();
	
	//para mostrar imagenes
	$options = $dompdf->getOptions();
	$options->set(array('isRemoteEnabled' => true));
	$dompdf->setOptions($options);

	$dompdf->loadHtml($html);
	$dompdf->setPaper('letter');
	$dompdf->render();
	$dompdf->stream("carta.pdf", array("Attachment" => false));

?>