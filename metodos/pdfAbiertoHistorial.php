
<?php ob_start(); require_once ("../conexion/conexion.php"); 
$id = $_REQUEST['id'];?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel ="stylesheet" href="css/estilos.css">
 
<h2 id = 'letra_reportes' >Help Desk</h2>
<table  class="table table-striped" id="tablaticketse" >

  <tr>
    <th>ID</th>
    <th>Fecha de apertura</th>
    <th>Usuario de apertura</th>
    <th>Red</th>
    <th>Marca</th>
    <th>Nº de Equipo</th>
    <th>Problema</th>
    <th>Respuesta</th>
    <th>Usuario de respuesta</th>
    <th>Finalizo</th>
    <?php
  $sel = $con  -> query("SELECT * FROM tickets WHERE id=$id finalizo IS NULL"); //aqui tabla de tickets normales

  while ($fila = $sel -> fetch_assoc()) {
  ?>
  <tr>
  <td><?php echo $fila['id']?></td>
      <td><?php echo $fila['fecha']?></td>
      <td><?php echo $fila['usuario']?></td>
      <td><?php echo $fila['red']?></td>
      <td><?php echo $fila['marca']?></td>
      <td><?php echo $fila['equipo']?></td>
      <td><?php echo $fila['problema']?></td>
      <td><?php echo $fila['respuesta']?></td>
      <td><?php echo $fila['usuarioresp']?></td>
      <td><?php echo $fila['finalizo']?></td>
  </tr>
  <?php } ?>
</table>
  <?php
require_once ('../propiedades/dompdf/autoload.inc.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();
$pdf = $dompdf->output();

// Output the generated PDF to Browser
$dompdf->stream("Reporte_Ticket_Individual");

?>





