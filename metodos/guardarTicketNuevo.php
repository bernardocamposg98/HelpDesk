<?php
require_once ("../conexion/conexion.php");
$id_usuario = $_POST['id_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$marca = $_POST['marca'];
$equipoNumero = $_POST['equipo'];
$red = $_POST['red'];
$tipo_problema = $_POST['tipo_problema'];
$problema = $_POST['problema'];

if(!$con){ 
    die("Falló ". mysqli_connect_error());

}else{
    $query = "INSERT INTO tickets(fecha_inicio, id_usuario, nombre_usuario, marca, equipo, red, tipo_problema, problema) VALUES (now(), '$id_usuario', '$nombre_usuario', '$marca', '$equipoNumero','$red','$tipo_problema','$problema')";
    $result = mysqli_query($con, $query);
}
if ($query) {
    echo "<script>location.href='../usuarioTicketAbierto.php';</script>";
}

else{
    echo "<script>alert('el registro no se logro realizar satisfactoriamente')location.href='../usuarioTicketAbierto.php';</script>";
}
?>