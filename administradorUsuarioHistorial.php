<?php
        require_once ("conexion/conexion.php"); 
        session_start();
          if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
        }else{                             
        header("location: index.php");                                  
        }
?>
<?php require_once './secciones/header.php';?>
     <?php require_once './secciones/navAdmin.php';?>

	
    <div class="container">
    	<h2>Usuarios en el sistema</h2>
        <br>           
        <table  class="table table-striped " id="tablatickets">        
			<th>ID</th> 
			<th>Nombre</th>
			<th>Usuario</th>
			<th>Email</th>
			<th>Celular</th>
			<th>Tipo de usuario</th>
			<th></th>
			<th></th>
			<?php
            $sel = $con->query("SELECT*FROM usuarios WHERE NOT id=1"); 
            while ($fila = $sel -> fetch_assoc()) {
            ?>
            <tr class="text-left">
                <td><?php echo $fila['id']?></td>
				<td><?php echo $fila['nombre']?></td>
				<td><?php echo $fila['usuario']?></td>
				<td><?php echo $fila['email']?></td>
				<td><?php echo $fila['celular']?></td>
				<td><?php echo $fila['tipo_usuario']?></td>
				<td><a class="btn btn-primary" href="administradorUsuarioModificar.php?id=<?php echo $fila['id']?>">MODIFICAR</a></td>
				<td><a class="btn btn-danger" href="metodos/eliminarUsuario.php?id=<?php echo $fila['id']?>">ELIMINAR</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>

     <?php require_once './secciones/footer.php';?>
