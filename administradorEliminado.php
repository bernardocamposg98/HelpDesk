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
	<div class="container">
        <div class="jumbotron">
    <h1>Mis Tickets Abiertos Historial</h1>      
    <p>Aqui se podran observar los tickets pendientes por darles solucion.</p>
  </div>
        <div class="table-responsive">
        <table  class="tabla table table-striped" id="tablatickets" >
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
                <?php 
                $id = $_SESSION["id"];
                $sel = $con->query("SELECT*FROM tickets where id_usuario = $id");
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
            </tr>
            <?php } ?>
        </table>
        </div>
         <br>
   <div class="jumbotron">
    <h1>Mis Tickets Cerrados Historial</h1>      
    <p>Aqui se podran observar los Tickets que ya se les dio solucion.</p>
  </div>
		<div class="table-responsive">
        <table  class="tabla table table-striped" id="tablatickets" >
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
                <?php 
                $id = $_SESSION["id"];
                $sel = $con->query("SELECT*FROM tickets where id_tecnico = $id");
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
            </tr>
            <?php } ?>
        </table>
            </div>
    </div>
<?php require_once './secciones/footer.php';?>

