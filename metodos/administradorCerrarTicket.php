<?php
require_once ("../conexion/conexion.php");
$tecnico_id = $_POST['tecnico_id'];
$tecnico_nombre = $_POST['tecnico_nombre'];
$respuesta = $_POST['respuesta'];
$id = $_POST['id'];


if(!$con){
    die("Falló ". mysqli_connect_error());
}else{
    $query = "UPDATE tickets SET id_tecnico=$tecnico_id, respuesta='".$respuesta. "', nombre_tecnico='".$tecnico_nombre."' WHERE id=$id";
    $result = mysqli_query($con, $query);
}
if ($query) {
    echo "<script>location.href='../administradorTicketCerrado.php';</script>";
}else{
    echo "<script>alert('No se realizo el cambio')location.href='../administradorTicketCerrado.php';</script>";
}
?>

