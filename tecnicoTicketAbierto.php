<?php
require_once ("conexion/conexion.php");
session_start();
if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Tecnico"){
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
                <li><a href="tecnicoIndex.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li class="active"><a href="tecnicoTicketAbierto.php"><span class="glyphicon glyphicon-folder-open"></span> Tickets Abiertos</a></li>
                <li><a href="tecnicoTicketCerrado.php"><span class="glyphicon glyphicon-check"></span> Tickets Cerrados</a></li>
        	</ul>
        	<ul class="nav navbar-nav navbar-right">
				<li class=""><a><?php echo $_SESSION["tipo_usuario"]?>: <?php echo $_SESSION['u_usuario']?></a></li>
				<li><a href="metodos/cerrarSesion.php"><span class="glyphicon glyphicon-log-in"></span> Salir </a></li>
			</ul>
        </div>
	</nav>
	<div class="container">
		<h2>Tickets Abiertos</h2>
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
				<form action ="metodos/tecnicoCerrarTicket.php" method="post">
					<td>
						<textarea name="resp" rows="10" cols="40" style="margin: 0px; height: 55px; width: 287px;"></textarea>
					</td>
					<input type="hidden" name="id" value="<?php echo $fila['id']?>" >
					<input type="hidden" name="usuario_a" value="<?php echo $_SESSION['u_usuario']; ?>" >
					<td>
						<button id="btn-signup" type="submit" class="btn btn-primary"><i value = "Guardar" ></i>Cerrar</button>
					</td>
				</form>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>