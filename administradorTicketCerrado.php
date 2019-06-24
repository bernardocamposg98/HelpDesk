<?php
require_once ("conexion/conexion.php"); 
session_start();
    if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
    //echo $_SESSION['u_usuario'];
} else {                             
header("location: index.php");                                  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel = "stylesheet" href="css/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets cerrados</title>
</head>
<body>        
    <nav class="navbar navbar-inverse">
		<div class="container-fluid">
    		<div class="navbar-header">
        		<a class="navbar-brand" href="#">Help Desk</a>
        	</div>
        	<ul class="nav navbar-nav">
                <li><a href="administradorIndex.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
				<li><a href="administradorUsuarioNuevo.php"><span class="glyphicon glyphicon-user"></span> Crear Usuario</a></li>
				<li><a href="administradorUsuarioHistorial.php"> Usuarios</a></li>
				<li><a href="administradorTicketNuevo.php"><span class="glyphicon glyphicon-edit"></span> Abrir Ticket</a></li>
				<li><a href="administradorTicketAbierto.php"><span class="glyphicon glyphicon-edit"></span> Tickets Abiertos</a></li>
				<li class="active"><a href="administradorTicketCerrado.php"><span class="glyphicon glyphicon-check"></span> Tickets Cerrados</a></li>
				<li><a href="administradorTicketHistorial.php"> Tickets Historial</a></li>
        	</ul>
        	<ul class="nav navbar-nav navbar-right">
				<li class=""><a><?php echo $_SESSION["tipo_usuario"]?>: <?php echo $_SESSION['u_usuario']?></a></li>
				<li><a href="metodos/cerrarSesion.php"><span class="glyphicon glyphicon-log-in"></span> Salir </a></li>
			</ul>
        </div>
	</nav>
    <h3>Tickets cerrados </h3>
    <a class = "btn btn-danger" href="metodos/pdfCerradoHistorial.php">Reporte Historial Cerrado</a>
    <table  class="table table-striped" id="tablatickets" >
            <th>ID</th>
            <th>Fecha de apertura</th>
            <th>Usuario de apertura</th>
            <th>Marca</th>
            <th>Red</th>
            <th>Nº de Equipo</th>
            <th>Problema</th>
            <th>Respuesta</th>
            <th>Usuario de respuesta</th>
            <th>Finalizo</th>
            <th>PDF</th>
            <?php
        $sel = $con->query("SELECT*FROM tickets WHERE finalizo IS NOT NULL");
        while ($fila = $sel -> fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $fila['id']?></td>
            <td><?php echo $fila['fecha']?></td>
            <td><?php echo $fila['usuario']?></td>
            <td><?php echo $fila['marca']?></td>
            <td><?php echo $fila['red']?></td>
            <td><?php echo $fila['equipo']?></td>
            <td><?php echo $fila['problema']?></td>
            <td><?php echo $fila['respuesta']?></td>
            <td><?php echo $fila['usuarioresp']?></td>
            <td><?php echo $fila['finalizo']?></td>
            <td><a class="btn btn-warning" href="metodos/pdfIndividualHistorial.php?id=<?php echo $fila['id']?>">PDF</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>