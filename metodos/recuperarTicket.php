<?php
require_once ("../conexion/conexion.php"); 

$id = $_REQUEST['id'];
$sel = $con->query("SELECT*FROM tickets where id = $id");
while ($fila = $sel -> fetch_assoc()) { 
    $fecha = $fila['fecha_fin'];
}
echo $fecha;

if($fecha == "") {
    $fecha = "nulo";
}
if($fecha == 'nulo') {
    $del = $con->query("UPDATE tickets SET estatus='".activo."', fecha_fin=null WHERE id='$id' ");
} else {
    $del = $con->query("UPDATE tickets SET estatus='".activo."', fecha_fin='".$fecha."' WHERE id='$id' ");
}

if ($del) {
    echo "<script>location.href='../administradorEliminado.php';</script>";
}else{
    echo "<script>alert('el registro no fue eliminado')location.href='../administradorEliminado.php';</script>";
}
?>