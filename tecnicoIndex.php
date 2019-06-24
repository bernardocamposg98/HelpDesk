<?php
        session_start();
          if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Tecnico"){
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>    
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Help Desk</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="tecnicoIndex.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li><a href="tecnicoTicketAbierto.php"><span class="glyphicon glyphicon-folder-open"></span> Tickets Abiertos</a></li>
                <li><a href="tecnicoTicketCerrado.php"><span class="glyphicon glyphicon-check"></span> Tickets Cerrados</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li class=""><a><?php echo $_SESSION["tipo_usuario"]?>: <?php echo $_SESSION['u_usuario']?></a></li>
				<li><a href="metodos/cerrarSesion.php"><span class="glyphicon glyphicon-log-in"></span> Salir </a></li>
			</ul>
        </div>
    </nav>
</body>

<script src="js/bootstrap.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
function alerta() {
    alert("Favor de revisar los tickets abiertos recientemente");
}
</script>

</html>