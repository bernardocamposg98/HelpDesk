<?php
require_once ("conexion/conexion.php"); 
session_start();
    if(isset($_SESSION['usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
} else {                             
header("location: index.php");                                  
}
?>
<?php require_once './secciones/header.php';?>
     <?php require_once './secciones/navAdmin.php';?>
<div class="container">
    <div class="jumbotron">
    <h1>Historial Tickets</h1>      
    <p>Aqui se podran observar los todo los Tickets Ingresados en el sistema.</p>
  </div>

<div class="table-responsive">
    <a class = "btn btn-success" href="metodos/pdfHistorial.php">Reporte Historial Completo</a>
    <br>
    <br>

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
            <th>PDF</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
            <?php 
        $sel = $con->query("SELECT*FROM tickets");
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
            <td><a class="btn btn-warning" href="metodos/pdfIndividualHistorial.php?id=<?php echo $fila['id']?>">PDF</a></td>
            <td><a class="btn btn-primary" href="administradorTicketModificar.php?id=<?php echo $fila['id']?>">MODIFICAR</a></td>
            <td><a class="btn btn-danger" href="metodos/eliminarTicket.php?id=<?php echo $fila['id']?>">ELIMINAR</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
</div>
<?php require_once './secciones/footer.php';?>
     
