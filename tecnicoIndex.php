<?php
require_once ("conexion/conexion.php"); 
session_start();
  if(isset($_SESSION['usuario']) && $_SESSION["tipo_usuario"]=="Tecnico"){
}else{                             
header("location: index.php");                                  
}
?>
<?php require_once './secciones/header.php';?>
     <?php require_once './secciones/navTecnico.php';?>
    <div class="container">
        <h3>Mis Tickets </h3>
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
<?php require_once './secciones/footer.php';?>