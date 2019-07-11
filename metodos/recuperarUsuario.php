<?php
require_once ("../conexion/conexion.php"); 

$id = $_REQUEST['id'];
$sel = $con->query("SELECT*FROM usuarios where id = $id");
while ($fila = $sel -> fetch_assoc()) { 
    $fecha = $fila['fecha_fin'];
}

    $del = $con->query("UPDATE usuarios SET estatus='".activo."' WHERE id='$id' ");

if ($del) {
    echo "<script>location.href='../administradorEliminado.php';</script>";
}else{
    echo "<script>alert('el registro no fue eliminado')location.href='../administradorEliminado.php';</script>";
}
?>