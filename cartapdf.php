
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
    <p align="center"> <b> Elias</b> </p>
    <p align="center"> <b> UTM</b> </p>
  </body>
</html>

<?php
	// Include the main TCPDF library (search for installation path).
require_once('libreria/tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_SIZE_DATA);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);


// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled' => true, 'color' => array(196, 196, 196), 'opacity' => 0, 'blend_mode' => 'Normal'));

// Set some content to print
$html = ob_get_clean();

// Print text using writeHTMLCell()
$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------
ob_end_clean();

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('carta-recomendacion.pdf', 'I');


?>