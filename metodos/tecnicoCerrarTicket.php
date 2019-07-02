<?php
require_once ("../conexion/conexion.php");
$respuesta = $_POST['respuesta'];
$id = $_POST['id'];
$usuario =$_POST['usuario'];


if(!$con){
    die("Falló ". mysqli_connect_error());
}else{
    $query = "UPDATE tickets SET respuesta='".$respuesta. "',nombre_tecnico='".$usuario."' WHERE id=$id";
    $result = mysqli_query($con, $query);
}
if ($query) {
    echo "<script>location.href='../tecnicoTicketCerrado.php';</script>";
}else{
    echo "<script>alert('No se realizo el cambio')location.href='../tecnicoTicketCerrado.php';</script>";
}
?>

