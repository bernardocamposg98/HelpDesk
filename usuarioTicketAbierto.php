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
    <h1>Tickets Abiertos <span style="font-size: 40px;"> 
                <span class=" fas fa-ticket-alt"> </span>
            </span> </h1>      
    <p>Aqui se podran observar los tickets pendientes por darles solucion.</p>
  </div>
    <div class="table-responsive">
    <table class="tabla table table-striped">
    
        <th>Fecha de apertura</th>
        <th>Usuario de apertura</th>
        <th>Marca</th>
        <th>Red</th>
        <th>Nº de Equipo</th>
        <th>Tipo de Problema</th>
        <th>Problema</th>
        <?php
            $sel = $con  -> query("SELECT * FROM tickets WHERE fecha_fin IS NULL and estatus='activo'"); //aqui tabla de tickets normales
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
        </tr>
        <?php } ?>
    </table>
</div>
</div>
<?php require_once './secciones/footer.php';?>
