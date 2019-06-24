<?php
require_once ("../conexion/conexion.php");
$resp = $_POST['resp'];
$id = $_POST['id'];
$usuario_a =$_POST['usuario_a'];

if(!$con){
    die("Falló ". mysqli_connect_error());
}else{
    $query = "UPDATE tickets SET respuesta='".$resp. "',usuarioresp='".$usuario_a."' WHERE id=$id";
    $result = mysqli_query($con, $query);
}
if ($query) {
    echo "<script>location.href='../administradorTicketCerrado.php';</script>";
}else{
    echo "<script>alert('No se realizo el cambio')location.href='../administradorTicketCerrado.php';</script>";
}
?>

