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
    <h1>Tickets Cerrados<span style="font-size: 40px;"> 
                <span class="fa fa-close"> </span>
            </span></h1>      
    <p>Aqui se podran observar los tickets que ya se les dio solucion.</p>
  </div>
<div class="table-responsive ">
    <a class = "btn btn-success" href="metodos/pdfCerradoHistorial.php">Reporte Cerrado <span class="fas fa-file-alt"></span></a>
    <br>
    <br>
    <table  class=" tabla table-bordered table-hover table table-striped" id="tablatickets" >
        <thead class="thead-light">
            <th>ID</th>
            <th>Fecha de apertura</th>
            <th>Usuario de apertura</th>
            <th>Marca</th>
            <th>Red</th>
            <th>Nº de Equipo</th>
            <th>Tipo de problema</th>
            <th>Problema</th>
            <th>Finalizo</th>
            <th>Técnico de respuesta</th>
            <th>Respuesta</th>
            <th>PDF</th>
            <?php
        $sel = $con->query("SELECT*FROM tickets WHERE fecha_fin IS NOT NULL and estatus='activo'");
        while ($fila = $sel -> fetch_assoc()) {
        ?>
            </thead>
        <tbody>
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
            <td><a class="btn btn-success" href="metodos/pdfIndividualHistorial.php?id=<?php echo $fila['id']?>">PDF <span class="fas fa-file-alt"></span></a></td>
        </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
</div>

     <?php require_once './secciones/footer.php';?>
