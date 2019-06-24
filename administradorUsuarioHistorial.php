<?php
        require_once ("conexion/conexion.php"); 
        session_start();
          if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
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
    <link rel = "stylesheet" href="css/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de usuarios</title>
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
				<li class="active"><a href="administradorUsuarioHistorial.php"> Usuarios</a></li>
				<li><a href="administradorTicketNuevo.php"><span class="glyphicon glyphicon-edit"></span> Abrir Ticket</a></li>
				<li><a href="administradorTicketAbierto.php"><span class="glyphicon glyphicon-edit"></span> Tickets Abiertos</a></li>
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
    	<h2>Usuarios en el sistema</h2>
        <br>           
        <table  class="table table-striped " id="tablatickets">        
			<th>ID</th> 
			<th>Nombre</th>
			<th>Usuario</th>
			<th>Email</th>
			<th>Celular</th>
			<th>Tipo de usuario</th>
			<th></th>
			<th></th>
			<?php
            $sel = $con->query("SELECT*FROM usuarios WHERE NOT id=1"); 
            while ($fila = $sel -> fetch_assoc()) {
            ?>
            <tr class="text-left">
                <td><?php echo $fila['id']?></td>
				<td><?php echo $fila['nombre']?></td>
				<td><?php echo $fila['usuario']?></td>
				<td><?php echo $fila['email']?></td>
				<td><?php echo $fila['celular']?></td>
				<td><?php echo $fila['tipo_usuario']?></td>
				<td><a class="btn btn-primary" href="administradorUsuarioModificar.php?id=<?php echo $fila['id']?>">MODIFICAR</a></td>
				<td><a class="btn btn-danger" href="metodos/eliminarUsuario.php?id=<?php echo $fila['id']?>">ELIMINAR</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
