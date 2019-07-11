<?php
require_once ("conexion/conexion.php");
session_start();
  if(isset($_SESSION['usuario']) && $_SESSION["tipo_usuario"]=="Usuario"){
}else{                             
header("location: index.php");                                  
}
?>
<?php require_once './secciones/header.php';?>
     <?php require_once './secciones/navUsuario.php';?>
     <div class="container">
         <div class="jumbotron">
    <h1>Mis Tickets </h1>      
    <p>Aqui se podran observar los sus Tickets.</p>
  </div>
         <div class="table-responsive">
        <table  class="tabla table table-striped" id="tablatickets" >
                
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
                $sel = $con->query("SELECT*FROM tickets where id_usuario = $id and estatus='activo'");
                while ($fila = $sel -> fetch_assoc()) {
            ?>
            <tr>
            
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
<script src="js/bootstrap.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
function alerta() {
    alert("Favor de revisar los tickets abiertos recientemente");
}
</script>

<?php require_once './secciones/footer.php';?>
