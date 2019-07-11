<?php 
require_once ("conexion/conexion.php"); 
session_start();
    if(isset($_SESSION['usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
} else {                             
header("location: index.php");                                  
}       
?> 
<head>
    <title>Help Desk</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
    <?php require_once './secciones/navAdmin.php';?>
    <br>
    <br>
	<div class="container col-md-12">
        <h3>Tickets Eliminados</h3>
        <table  class="table table-striped" id="tablatickets" >
                <th>ID</th>
                <th>Fecha de apertura</th>
                <th>Usuario de apertura</th>
                <th>Marca</th>
                <th>Red</th>
                <th>Nº de Equipo</th>
                <th>Tipo de Problema</th>
                <th>Problema</th>
                <th>Finalizo</th>
                <th>Técnico de respuesta</th>
                <th>Respuesta</th>
                <th>RECUPERAR</th>
                <?php 
                $id = $_SESSION["id"];
                $sel = $con->query("SELECT*FROM tickets where estatus='eliminado'");
                while ($fila = $sel -> fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['fecha_inicio']?></td>
                <td><?php echo $fila['nombre_usuario']?></td>
                <td><?php echo $fila['marca']?></td>
                <td><?php echo $fila['red']?></td>
                <td><?php echo $fila['equipo']?></td>
                <td><?php echo $fila['tipo_problema']?></td>
                <td><?php echo $fila['problema']?></td>
                <td><?php echo $fila['fecha_fin']?></td>
                <td><?php echo $fila['nombre_tecnico']?></td>
                <td><?php echo $fila['respuesta']?></td>
                <td><a class="btn btn-primary" href="metodos/recuperarTicket.php?id=<?php echo $fila['id']?>">RECUPERAR</a></td>
            </tr>
            <?php } ?>
        </table>
		<h3>Usuarios Eliminados</h3>
        <table  class="table table-striped" id="tablatickets" >
            <th>ID</th> 
			<th>Nombre</th>
			<th>Usuario</th>
			<th>Email</th>
			<th>Celular</th>
			<th>Tipo de usuario</th>
            <th>RECUPERAR</th>
                <?php 
                $id = $_SESSION["id"];
                $sel = $con->query("SELECT*FROM usuarios where estatus='eliminado'");
                while ($fila = $sel -> fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $fila['id']?></td>
				<td><?php echo $fila['nombre']?></td>
				<td><?php echo $fila['usuario']?></td>
				<td><?php echo $fila['email']?></td>
				<td><?php echo $fila['celular']?></td>
				<td><?php echo $fila['tipo_usuario']?></td>
                <td><a class="btn btn-primary" href="metodos/recuperarUsuario.php?id=<?php echo $fila['id']?>">RECUPERAR</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
<?php require_once './secciones/footer.php';?>

