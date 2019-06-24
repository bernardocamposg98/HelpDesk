<?php  
require_once ("../conexion/conexion.php");

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$email = $_POST['email'];
$nivel_usuario = $_POST['nivel_usuario'];
$celular = $_POST['celular'];

if(!$con){
    die("Falló ". mysqli_connect_error());
} else {    
    $query = "INSERT INTO usuarios (nombre, usuario, password, email, tipo_usuario, celular) VALUES ('$nombre', '$usuario','$password','$email','$nivel_usuario','$celular')";
    $result = mysqli_query($con, $query);
    
    if ($query) {
        echo "<script>
        location.href='../administradorUsuarioHistorial.php';
        </script>";
    }else{
        echo "<script>alert('El registro no se completo')</script>";
    }
}
?>











