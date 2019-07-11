<?php 
$connection = mysqli_connect("localhost","root","","prueba") or die("Error " . mysqli_error($connection));
$sql = "SELECT * FROM marcas";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
//acer
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where marca='Acer'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE marcas SET total='".$totalFinal."' WHERE marca='Acer'");
//asus
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where marca='Asus'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE marcas SET total='".$totalFinal."' WHERE marca='Asus'");
//apple
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where marca='Apple'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE marcas SET total='".$totalFinal."' WHERE marca='Apple'");
//Lenovo
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where marca='Lenovo'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE marcas SET total='".$totalFinal."' WHERE marca='Lenovo'");
//Dell
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where marca='Dell'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE marcas SET total='".$totalFinal."' WHERE marca='Dell'");
//HP
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where marca='HP'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE marcas SET total='".$totalFinal."' WHERE marca='HP'");
//Toshiba
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where marca='Toshiba'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE marcas SET total='".$totalFinal."' WHERE marca='Toshiba'");
//Samsung
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where marca='Samsung'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE marcas SET total='".$totalFinal."' WHERE marca='Samsung'");
//Otro
$consulta = mysqli_query($connection,"Select count(*) as cuenta FROM tickets where marca='Otro'");
$total = mysqli_fetch_assoc($consulta);
(string) $totalFinal = $total['cuenta'];
$resultado = mysqli_query($connection,"UPDATE marcas SET total='".$totalFinal."' WHERE marca='Otro'");
//

$array = array();
$i = 0;
while($row = mysqli_fetch_assoc($result))
{  
    $producto = $row['marca'];
    $unidades_vendidas = $row['total'];
    $array['cols'][] = array('type' => 'string'); 
    $array['rows'][] = array('c' => array( array('v'=> $producto), array('v'=>(int)$unidades_vendidas)) );
}
$data = json_encode($array);
echo $data;
?>