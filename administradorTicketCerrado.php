<?php
require_once ("conexion/conexion.php"); 
session_start();
    if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
    //echo $_SESSION['u_usuario'];
} else {                             
header("location: index.php");                                  
}
?>
<?php require_once './secciones/header.php';?>
     <?php require_once './secciones/navAdmin.php';?>
        
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

     <?php require_once './secciones/footer.php';?>
