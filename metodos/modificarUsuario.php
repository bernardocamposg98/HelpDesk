<?php
require_once ("../conexion/conexion.php"); 

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$nivel_usuario = $_POST['nivel_usuario'];
$celular = $_POST['celular'];

$query = "UPDATE usuarios SET nombre='".$nombre."', usuario='".$usuario."', email='".$email."', tipo_usuario='".$nivel_usuario."', celular='".$celular."' WHERE id='".$id."'";
$result = mysqli_query($con, $query);
if ($result) {
    echo "<script>location.href='../administradorUsuarioHistorial.php';</script>";
}else{
    echo "<script>alert('No se modifico correctamente')location.href='../administradorUsuarioHistorial.php';</script>";
} 
?>