<?php
        require_once ("conexion/conexion.php"); 
        session_start();
          if(isset($_SESSION['usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
        }else{                             
        header("location: index.php");                                  
        }
?>
<?php require_once './secciones/header.php';?>
     <?php require_once './secciones/navAdmin.php';?>

	
    <div class="container">
    	 <div class="jumbotron">
    <h1>Usuarios <span style="font-size: 40px;"> 
                <span class=" fas fa-users"> </span>
        </span></h1>      
    <p>Aqui se podran observar los usuarios.</p>
  </div>       
        <div class="table-responsive">
        
        <table  class=" tabla table table-bordered table-hover table-striped " id="tablatickets">   
            <thead class="thead-light">
			<th>ID</th> 
			<th>Nombre</th>
			<th>Usuario</th>
			<th>Email</th>
			<th>Celular</th>
			<th>Tipo de usuario</th>
			<th></th>
			<th></th>
			<?php
            $sel = $con->query("SELECT*FROM usuarios WHERE NOT id=1 and estatus='activo'"); 
            while ($fila = $sel -> fetch_assoc()) {
            ?>
                </thead>
            <tbody>
            <tr class="text-left">
                <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['nombre']?></td>
                <td><?php echo $fila['usuario']?></td>
                <td><?php echo $fila['email']?></td>
                <td><?php echo $fila['celular']?></td>
                <td><?php echo $fila['tipo_usuario']?></td>
                <td><a class="btn btn-primary" href="administradorUsuarioModificar.php?id=<?php echo $fila['id']?>">Modificar <span class="fas fa-edit"></span></a></td>
                <td><a class="btn btn-danger" href="metodos/eliminarUsuario.php?id=<?php echo $fila['id']?>">Eliminar <span class="fas fas fa-trash-alt"></span></a></td>
            </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
</div>

     <?php require_once './secciones/footer.php';?>
