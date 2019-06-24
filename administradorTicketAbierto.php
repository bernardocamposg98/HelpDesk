<?php
require_once ("conexion/conexion.php");
session_start();
if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
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
    <title>Fichas Abiertas</title>
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
				<li  class="active"><a href="administradorTicketAbierto.php"><span class="glyphicon glyphicon-edit"></span> Tickets Abiertos</a></li>
				<li><a href="administradorTicketCerrado.php"><span class="glyphicon glyphicon-check"></span> Tickets Cerrados</a></li>
				<li><a href="administradorTicketHistorial.php"> Tickets Historial</a></li>
        	</ul>
        	<ul class="nav navbar-nav navbar-right">
				<li class=""><a><?php echo $_SESSION["tipo_usuario"]?>: <?php echo $_SESSION['u_usuario']?></a></li>
				<li><a href="metodos/cerrarSesion.php"><span class="glyphicon glyphicon-log-in"></span> Salir </a></li>
			</ul>
        </div>
	</nav>
	<div class="container">
		<h2>Tickets Abiertos</h2>
		<a class = "btn btn-danger" href="metodos/pdfAbiertoHistorial.php">Reporte Completo</a>
		<br>
		<table  class="table table-striped" id="tabtoclesp">
			<th>ID</th>
			<th>Fecha de apertura</th>
			<th>Usuario de apertura</th>
			<th>equipo</th>
			<th>red</th>
			<th>Problema</th>
			<th>Respuesta</th>
			<th>Cerrar</th>
			<th>PDF</th>
			<?php
			$sel = $con->query("SELECT * FROM tickets WHERE finalizo IS NULL");
			while ($fila = $sel -> fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $fila['id']?></td>
				<td><?php echo $fila['fecha']?></td>
				<td><?php echo $fila['usuario']?></td>
				<td><?php echo $fila['equipo']?></td>
				<td><?php echo $fila['red']?></td>
				<td><?php echo $fila['problema']?></td>
				<form action ="metodos/administradorCerrarTicket.php" method="post">
					<td>
						<textarea name="resp" rows="10" cols="40" style="margin: 0px; height: 55px; width: 287px;"></textarea>
					</td>
					<input type="hidden" name="id" value="<?php echo $fila['id']?>" >
					<input type="hidden" name="usuario_a" value="<?php echo $_SESSION['u_usuario']; ?>" >
					<td>
						<button id="btn-signup" type="submit" class="btn btn-primary"><i value = "Guardar" ></i>Cerrar</button>
					</td>
					<td><a class="btn btn-warning" href="metodos/pdfIndividualHistorial.php?id=<?php echo $fila['id']?>">PDF</a></td>
				</form>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>