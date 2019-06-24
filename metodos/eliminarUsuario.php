<?php
require_once ("../conexion/conexion.php"); 

$id = $_REQUEST['id'];
$del = $con ->query("DELETE FROM usuarios WHERE id = '$id' ");

if ($del) {
    echo "<script>location.href='../administradorUsuarioHistorial.php';</script>";
}else{
    echo "<script>alert('el registro no fue eliminado')location.href='../administradorUsuarioHistorial.php';</script>";
}
?>