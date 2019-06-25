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
		<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">Abrir nuevo ticket</div>
				</div>
				<div class="panel-body">
					<form action ="metodos/administradorGuardarTicketNuevo.php" method="post">
						<div class="col-md-12">
							<label class="col-md-3 control-label" nombre="nombreusuario" >Nombre:</label>
							<label class="col-md-9 control-label" nombre="nombreusuario" ><?php echo $_SESSION['u_usuario']?></label>
						</div>
						<input type="hidden" name="u_user" value="<?php echo $_SESSION['u_usuario']; ?>"/>
						<div class="col-md-12">
							<label for="marca" class="col-md-3 control-label">Marca:</label>
							<input class="col-md-2" type="text" maxlength="30" name="marca"/>
						</div>
						<div class="col-md-12">
							<label for="equipo" class="col-md-3 control-label">Nº de Equipo:</label>
							<input class="col-md-2" type="text" size="5" maxlength="30" name="equipo"/>
						</div>
						<div class="col-md-12">
							<label for="red" class="col-md-3 control-label">Red:</label>
							<input class="col-md-3" type="text" maxlength="30" name="red"/>
						</div>
						<div class="col-md-12">
							<label for="Problema" class="col-md-3 control-label">Problema:</label>
							<textarea name="descprob" rows="10" cols="40" required></textarea>
						</div>  						
						<div class="form-group">
							<div class="col-md-offset-3 col-md-9">
								<button id="btn-signup" type="submit" class="btn btn-info" value ="Guardar"><i class="icon-hand-right"></i>ENVIAR</button> 
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php require_once './secciones/footer.php';?>
    