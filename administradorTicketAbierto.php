<?php
require_once ("conexion/conexion.php");
session_start();
if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
    } else {                             
	header("location: index.php");                                  
}
?>
<?php require_once './secciones/header.php';?>
<?php require_once './secciones/navAdmin.php';?>

<div class="container">
     
  <div class="jumbotron">
    <h1>Tickets Abiertos</h1>      
    <p>Aqui se podran observar los tickets pendientes por darles solucion.</p>
  </div>
    <div class=" table-responsive">
       
        <a class="btn btn-success" href="metodos/pdfAbiertoHistorial.php">Reporte Completo</a>
        <br>
        <br>
        <table class="tabla table table-striped" id="tabtoclesp">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Fecha de apertura</th>
                    <th>Usuario de apertura</th>
                    <th>equipo</th>
                    <th>red</th>
                    <th>Problema</th>
                    <th>Respuesta</th>
                    <th>Cerrar</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <?php
			$sel = $con->query("SELECT * FROM tickets WHERE finalizo IS NULL");
			while ($fila = $sel -> fetch_assoc()) {
			?>
            <tr>
                <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['fecha']?></td>
                <td><?php echo $fila['usuario']?></td>
                <td><?php echo $fila['equipo']?></td>
                <td><?php echo $fila['red']?></td>
                <td><?php echo $fila['problema']?></td>
                <form action="metodos/administradorCerrarTicket.php" method="post">
                    <td>
                        <textarea name="resp" rows="10" cols="40" style="margin: 0px; height: 55px; width: 287px;"></textarea>
                    </td>
                    <input type="hidden" name="id" value="<?php echo $fila['id']?>">
                    <input type="hidden" name="usuario_a" value="<?php echo $_SESSION['u_usuario']; ?>">
                    <td>
                        <button id="btn-signup" type="submit" class="btn btn-danger"><i value="Guardar"></i>Cerrar</button>
                    </td>
                    <td><a class="btn btn-success" href="metodos/pdfIndividualHistorial.php?id=<?php echo $fila['id']?>">PDF</a></td>
                </form>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php require_once './secciones/footer.php';?>
