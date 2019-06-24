<?php
session_start();
$usuario = $_POST['usuario_i'];
$contrasenia = $_POST['password_i'];
$nivel_usuario="";

include ("../conexion/conexion.php");

$proceso = $con->query("SELECT*FROM usuarios WHERE usuario='$usuario' AND password='$contrasenia'");

if ($proceso->num_rows >0){
	while ($row=$proceso->fetch_assoc()){ 
		$nivel_usuario=$row[tipo_usuario];
		$_SESSION['u_usuario']=$row[usuario];
		$_SESSION['tipo_usuario']=$row[tipo_usuario];
	}
	if ($nivel_usuario=="Administrador") {
		header('Location: ../administradorIndex.php');
	}  
	if ($nivel_usuario=="Usuario") {
		header('Location: ../usuarioIndex.php');
	}
	if ($nivel_usuario=="Tecnico") {
		header('Location: ../tecnicoIndex.php');
	}
} else {
	header('Location: ../index.php');
}
?>