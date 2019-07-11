<?php
require_once ("conexion/conexion.php");
session_start();
if(isset($_SESSION['usuario']) && $_SESSION["tipo_usuario"]=="Tecnico"){
    } else {                             
	header("location: index.php");                                  
}
?>
<?php require_once './secciones/header.php';?>
     <?php require_once './secciones/navTecnico.php';?>
	<div class="container">
		<div class="jumbotron">
    <h1>Tickets Abiertos</h1>      
    <p>Aqui se podran observar los tickets pendientes por darles solucion.</p>
  </div>
		<div class="table-responsive">
			<table class=" tabla table table-striped" id="tabtoclesp">
				<th>ID</th>
				<th>Fecha de apertura</th>
				<th>Usuario de apertura</th>
				<th>Equipo</th>
				<th>Red</th>
				<th>Tipo de Problema</th>
				<th>Problema</th>
				<th>Respuesta</th>
				<th>Cerrar</th>
				<?php
				$sel = $con->query("SELECT * FROM tickets WHERE fecha_fin IS NULL and estatus='activo'");
				while ($fila = $sel -> fetch_assoc()) {
				?>
				<tr>
					<td><?php echo $fila['id']?></td>
					<td><?php echo $fila['fecha_inicio']?></td>
					<td><?php echo $fila['nombre_usuario']?></td>
					<td><?php echo $fila['equipo']?></td>
					<td><?php echo $fila['red']?></td>
					<td><?php echo $fila['tipo_problema']?></td>
					<td><?php echo $fila['problema']?></td>
					<form action ="metodos/tecnicoCerrarTicket.php" method="post">
						<td>
							<textarea name="respuesta" rows="10" cols="40" style="margin: 0px; height: 55px; width: 287px;"></textarea>
						</td>
						<input type="hidden" name="id" value="<?php echo $fila['id']?>" >
						<input type="hidden" name="usuario" value="<?php echo $_SESSION['nombre']; ?>" >
						<input type="hidden" name="id_tecnico" value="<?php echo $_SESSION['id']; ?>" >
						<td>
							<button id="btn-signup" type="submit" class="btn btn-primary"><i value = "Guardar" ></i>Cerrar</button>
						</td>
					</form>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
<?php require_once './secciones/footer.php';?>
     