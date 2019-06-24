<?php
	require_once ("conexion/conexion.php"); 
	session_start();
		if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Usuario"){
		//echo $_SESSION['u_usuario'];
	}else{                             
	header("location: index.php");                                  
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Abrir Ficha Nueva</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Help Desk</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="usuarioIndex.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li class="active"><a onclick="alerta()" href="usuarioTicketNuevo.php"><span class="glyphicon glyphicon-edit"></span> Abrir ticket</a></li>
                <li><a href="usuarioTicketCerrado.php"><span class="glyphicon glyphicon-check"></span> Tickets Cerrados</a></li>
                <li><a href="usuarioTicketAbierto.php"><span class="glyphicon glyphicon-folder-open"></span> Tickets Abiertos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li class=""><a><?php echo $_SESSION["tipo_usuario"]?>: <?php echo $_SESSION['u_usuario']?></a></li>
				<li><a href="metodos/cerrarSesion.php"><span class="glyphicon glyphicon-log-in"></span> Salir </a></li>
			</ul>
        </div>
    </nav>
	<div class="container">
		<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">Abrir nuevo ticket</div>
				</div>
				<div class="panel-body">
					<form action ="metodos/guardarTicketNuevo.php" method="post">
						<div class="col-md-12">
							<label class="col-md-3 control-label" nombre="nombreusuario" >Nombre:</label>
							<label class="col-md-9 control-label" nombre="nombreusuario" ><?php echo $_SESSION['u_usuario']?></label>
						</div>
						<input type="hidden" name="u_user" value="<?php echo $_SESSION['u_usuario']; ?>"/>
						<div class="col-md-12">
							<label for="marca" class="col-md-3 control-label">Marca:</label>
							<input class="col-md-2" type="text" maxlength="30" name="marca"/>
						</div>
						<div class="col-md-12">
							<label for="equipo" class="col-md-3 control-label">Nº de Equipo:</label>
							<input class="col-md-2" type="text" size="5" maxlength="30" name="equipo"/>
						</div>
						<div class="col-md-12">
							<label for="red" class="col-md-3 control-label">Red:</label>
							<input class="col-md-3" type="text" maxlength="30" name="red"/>
						</div>
						<div class="col-md-12">
							<label for="Problema" class="col-md-3 control-label">Problema:</label>
							<textarea name="descprob" rows="10" cols="40" required></textarea>
						</div>  						
						<div class="form-group">
							<div class="col-md-offset-3 col-md-9">
								<button id="btn-signup" type="submit" class="btn btn-info" value ="Guardar"><i class="icon-hand-right"></i>ENVIAR</button> 
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>