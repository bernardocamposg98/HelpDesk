<?php
require_once ("conexion/conexion.php"); 
session_start();
    if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Usuario"){
}else{                             
header("location: index.php");                                  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel ="stylesheet" href="css/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tickets Cerrados</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Help Desk</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="usuarioIndex.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li><a onclick="alerta()" href="usuarioTicketNuevo.php"><span class="glyphicon glyphicon-edit"></span> Abrir ticket</a></li>
                <li class="active"><a href="usuarioTicketCerrado.php"><span class="glyphicon glyphicon-check"></span> Tickets Cerrados</a></li>
                <li><a href="usuarioTicketAbierto.php"><span class="glyphicon glyphicon-folder-open"></span> Tickets Abiertos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li class=""><a><?php echo $_SESSION["tipo_usuario"]?>: <?php echo $_SESSION['u_usuario']?></a></li>
				<li><a href="metodos/cerrarSesion.php"><span class="glyphicon glyphicon-log-in"></span> Salir </a></li>
			</ul>
        </div>
    </nav>
   
    <div class="container">
        <h1>Tickets Cerrados</h1>
        <table  class="table table-striped" id="tablatickets" >
            <th>ID</th>
            <th>Fecha de apertura</th>
            <th>Usuario de apertura</th>
            <th>Red</th>
            <th>Marca</th>
            <th>Nº de Equipo</th>
            <th>Problema</th>
            <th>Respuesta</th>
            <th>Usuario de respuesta</th>
            <th>Finalizo</th>
            <?php
            $sel = $con  -> query("SELECT * FROM tickets WHERE finalizo IS NOT NULL"); //aqui tabla de tickets normales
            while ($fila = $sel -> fetch_assoc()) {
            ?>
            <tr>
            <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['fecha']?></td>
                <td><?php echo $fila['usuario']?></td>
                <td><?php echo $fila['red']?></td>
                <td><?php echo $fila['marca']?></td>
                <td><?php echo $fila['equipo']?></td>
                <td><?php echo $fila['problema']?></td>
                <td><?php echo $fila['respuesta']?></td>
                <td><?php echo $fila['usuarioresp']?></td>
                <td><?php echo $fila['finalizo']?></td>
            </tr>
            <?php } ?>
        </table>       
    </div>
</body>
</html>