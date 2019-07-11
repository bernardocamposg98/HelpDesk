<?php 
$connection = mysqli_connect("localhost","root","","prueba") or die("Error " . mysqli_error($connection));
$sql = "SELECT * FROM problemas";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
//software
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where tipo_problema='Software'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE problemas SET total='".$totalFinal."' WHERE problema='Software'");
//hardware
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where tipo_problema='Hardware'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE problemas SET total='".$totalFinal."' WHERE problema='Hardware'");
//red
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where tipo_problema='Red'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE problemas SET total='".$totalFinal."' WHERE problema='Red'");
//Otro
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where tipo_problema='Otro'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE problemas SET total='".$totalFinal."' WHERE problema='Otro'");
//
$array = array();
$i = 0;
while($row = mysqli_fetch_assoc($result))
{  
    $producto = $row['problema'];
    $unidades_vendidas = $row['total'];
    $array['cols'][] = array('type' => 'string'); 
    $array['rows'][] = array('c' => array( array('v'=> $producto), array('v'=>(int)$unidades_vendidas)) );
}
$data = json_encode($array);
echo $data;
?>