<?php
require_once ("../conexion/conexion.php");
$id = $_POST['id'];
$marca = $_POST['marca'];
$equipo = $_POST['equipo'];
$red = $_POST['red'];
$tipo_problema = $_POST['tipo_problema'];
$problema = $_POST['problema'];
$finalizo = $_POST['finalizo'];
$respuesta = $_POST['respuesta'];

if($finalizo == "") {
    $finalizo = "nulo";
}

if(!$con){ 
    die("Falló ". mysqli_connect_error());

}else{
    if($finalizo == "nulo"){
        $query = "UPDATE tickets SET marca='".$marca."', equipo='".$equipo."', red='".$red."', tipo_problema='".$tipo_problema."' , problema='".$problema."', fecha_fin=null, respuesta='".$respuesta."' WHERE id='".$id."'";
        $result = mysqli_query($con, $query);  
    }
    else {
        $query = "UPDATE tickets SET marca='".$marca."', equipo='".$equipo."', red='".$red."', tipo_problema='".$tipo_problema."' , problema='".$problema."', fecha_fin='$finalizo', respuesta='".$respuesta."' WHERE id='".$id."'";
        $result = mysqli_query($con, $query);
    }
}
if ($query) {
    echo "<script>location.href='../administradorTicketHistorial.php';</script>";
}

else{
    echo "<script>alert('La modificación no se logro realizar satisfactoriamente')location.href='../administradorTicketHistorial.php'';</script>";
}
?>