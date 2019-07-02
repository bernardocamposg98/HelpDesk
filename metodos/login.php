<?php
session_start();
$usuario = $_POST['usuario'];
$contrasenia = $_POST['password'];

include ("../conexion/conexion.php");

$proceso = $con->query("SELECT*FROM usuarios WHERE usuario='$usuario' AND password='$contrasenia'");

if ($proceso->num_rows > 0){
	while ($row=$proceso->fetch_assoc()){ 
		$nivel_usuario=$row[tipo_usuario];
		$_SESSION['id']=$row[id];
		$_SESSION['usuario']=$row[usuario];
		$_SESSION['tipo_usuario']=$row[tipo_usuario];
		$_SESSION['nombre']=$row[nombre];
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