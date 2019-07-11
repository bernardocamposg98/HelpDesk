<?php
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
    <h1>Nuevo Usuario</h1>      
    <p>Aqui se podran observar dar de alta nuevos usuarios en el sistema.</p>
  </div>
        <div class="row justify-content-center" >
		<div id="" style="margin-top:50px" class="mainbox col-md-10 col-lg-10 col-xl-6 col-sm-12">
			<div class="newUsuario panel panel-info">
				<div class="panel-heading">
				</div>  
				<div>
					<div class="panel-body">
						<form id="signupform" class="form-horizontal" role="form" action="metodos/guardarUsuario.php" method="POST" autocomplete="off">
							<!--<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>-->
							<div class="form-group">
								<label for="nombre" class=" control-label">Nombre:</label>
								<div class="">
                                    
                                      <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
									<input type="text" class="form-control" name="nombre" placeholder="Nombre y apellidos" required>
                                    </div>
								</div>
							</div>
							<div class="form-group">
								<label for="usuario" class="control-label">Usuario:</label>
								<div class="">
                                      <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                    </div>
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                                    </div>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class=" ">Password:</label>
								<div class="">
                                      <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
									<input type="password" class="form-control" name="password" id = "password" placeholder="Password" required>
                                    </div>
								</div>
							</div>
							<div class="form-group">
								<label for="con_password" class=" control-label">Confirmar Password</label>
								<div class="">
                                      <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key fa-key"></i></span>
                                    </div>
									<input type="password" class="form-control" name="con_password" id = "con_password" placeholder="Confirmar Password" required>
								</div>
                                </div>
							</div>
							<div class="form-group">
								<label for="email" class=" control-label">Email</label>
								<div class="">
                                      <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
									<input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
								</div>
							</div>
							<div class="form-group">
								<label for="celular" class=" control-label">Celular</label>
								<div class="">
                                      <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-mobile-phone" style="font-size: 25px;"></i></span>
                                    </div>
									<input type="text" id="phone" class="form-control" name="celular" placeholder="Celular" required>
                                    </div>
								</div>
							</div>
							<div id="listaLevelAccess">
								<label for="tipo_usuario" class="control-label">Nivel de acceso</label>
								<div class=""> 
									<select class="custom-select" name="nivel_usuario" action="guardar.php" method="POST">
										<option value="Administrador">Administrador</option>
										<option value="Tecnico">Técnico</option>
										<option value="Usuario">Usuario</option>
									</select>
								</div>
							</div>
                            <br>
							<div class="form-group">
								<div class="">
									<button id="btn-signup" type="submit" value = "Guardar" class="btn btn-primary"><i class="icon-hand-right"></i>Registrar</button> 
								</div>
							</div>
						</form>
					</div>                              </div>   	
				</div>
			</div>
		</div>
	</div>
	 <?php require_once './secciones/footer.php';?>
<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="js/inputmask/dist/jquery.inputmask.js" type="text/javascript"></script>
<script src="js/inputmask/dist/bindings/inputmask.binding.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
  $('#phone').inputmask("99-9999999");  //static mask
  $('#phone').inputmask({"mask": "(999) 999-9999"}); //specifying options
  $('phone').inputmask("9-a{1,3}9{1,3}"); //mask with dynamic syntax
});
    </script>