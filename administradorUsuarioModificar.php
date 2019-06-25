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
		<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">Registro</div>	
				</div>  
				<div>
					<div class="panel-body">
                    <?php
                    $id=$_GET['id'];
                    $sel = $con->query("SELECT*FROM usuarios WHERE id=$id"); 
                    while ($fila=$sel->fetch_assoc()) {
                    ?>
						<form id="signupform" class="form-horizontal" role="form" action="metodos/modificarUsuario.php" method="POST" autocomplete="off">
							<!--<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>-->
                            <input type="hidden" name="id" value="<?php echo $fila['id'] ?>"/>
							<div class="form-group">
								<label for="nombre" class="col-md-3 control-label">Nombre:</label>
								<div class="col-md-9">
									<input value="<?php echo $fila['nombre'] ?>" type="text" class="form-control" name="nombre" placeholder="Nombre y apellidos" required>
								</div>
							</div>
							<div class="form-group">
								<label for="usuario" class="col-md-3 control-label">Usuario:</label>
								<div class="col-md-9">
									<input value="<?php echo $fila['usuario'] ?>" type="text" class="form-control" name="usuario" placeholder="Usuario" required>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Email</label>
								<div class="col-md-9">
									<input value="<?php echo $fila['email'] ?>" type="email" class="form-control" name="email" placeholder="Email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="celular" class="col-md-3 control-label">Celular</label>
								<div class="col-md-9">
									<input value="<?php echo $fila['celular'] ?>" type="number" class="form-control" name="celular" placeholder="Celular" required>
								</div>
							</div>
                            
							<div id="combobox">
                                <input type="hidden" value="<?php echo $tipoUsuario = $fila['tipo_usuario'] ?>"/>
								<label for="tipo_usuario" class="col-md-3 control-label">Nivel de acceso</label>
								<div class="col-md-9"> 
									<select name="nivel_usuario" action="guardar.php" method="POST">
                                        <?php if ($tipoUsuario == 'Administrador') { 
                                            echo '
                                            <option selected value="Administrador">Administrador</option>
                                            <option value="Tecnico">Técnico</option>
                                            <option value="Usuario">Usuario</option>
                                            ';
                                        }
                                        if ($tipoUsuario == 'Tecnico') { 
                                            echo '
                                            <option value="Administrador">Administrador</option>
                                            <option selected value="Tecnico">Técnico</option>
                                            <option value="Usuario">Usuario</option>
                                            ';
                                        }
                                        if ($tipoUsuario == 'Usuario') { 
                                            echo '
                                            <option value="Administrador">Administrador</option>
                                            <option value="Tecnico">Técnico</option>
                                            <option selected value="Usuario">Usuario</option>
                                            ';
                                        }
                                        ?>
									</select>
								</div>
								<br>
								<br>
								<br>
							</div>
                            <? echo $tipoUsuario ?>
							<div class="form-group">
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" value="Guardar" class="btn btn-info"><i class="icon-hand-right"></i>MODIFICAR</button> 
								</div>
							</div>
						</form>
                        <?php } ?>
					</div>                                 	
				</div>
			</div>
		</div>
	</div>
	<?php require_once './secciones/footer.php';?>
   
	
