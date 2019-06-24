<?php
require_once ("../conexion/conexion.php");
$marca = $_POST['marca'];
$equipoNumero = $_POST['equipo'];
$red = $_POST['red'];
$descprob = $_POST['descprob'];
$usuario_a =$_POST['u_user'];

if(!$con){ 
    die("Falló ". mysqli_connect_error());

}else{
    $query = "INSERT INTO tickets(fecha, marca, equipo, red, problema, usuario) VALUES (now(), '$marca', '$equipoNumero','$red','$descprob','$usuario_a')";
    $result = mysqli_query($con, $query);
}
if ($query) {
    echo "<script>location.href='../administradorTicketAbierto.php';</script>";
}

else{
    echo "<script>alert('el registro no se logro realizar satisfactoriamente')location.href='abrirficha.php';</script>";
}
?>