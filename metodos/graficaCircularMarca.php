<?php 
require_once ("../conexion/conexion.php"); 
$result = "SELECT * FROM tickets";
/*
$result = mysqli_query($con, $query);
if ($result) {
    echo "<script>location.href='../administradorUsuarioHistorial.php';</script>";
}else{
    echo "<script>alert('No se modifico correctamente')location.href='../administradorUsuarioHistorial.php';</script>";
} */

$result = mysqli_query($con, $result) or die("Error in Selecting " . mysqli_error($con));
//create an array
$array = array();
$i = 0;
while($row = mysqli_fetch_assoc($result))
{  
    $marca = $row['marca'];
    $unidades_vendidas = $row['unidades_vendidas'];
    $array['cols'][] = array('type' => 'string'); 
    $array['rows'][] = array('c' => array( array('v'=> $marca), array('v'=>(int)$unidades_vendidas)) );
}
$data = json_encode($array);
echo $data;
?>