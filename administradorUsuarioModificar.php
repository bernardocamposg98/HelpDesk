<?php
require_once ("conexion/conexion.php"); 
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
    <div class="row justify-content-center">
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-10 col-lg-10 col-xl-6 col-sm-12">
            <div class="ModificarUsuario panel panel-info">
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
                            <input type="hidden" name="id" value="<?php echo $fila['id'] ?>" />
                            <div class="form-group">
                                <label for="nombre" class=" control-label">Nombre:</label>
                                <div class="">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input value="<?php echo $fila['nombre'] ?>" type="text" class="form-control" name="nombre" placeholder="Nombre y apellidos" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="usuario" class=" control-label">Usuario:</label>
                                <div class="">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                    <input value="<?php echo $fila['usuario'] ?>" type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <div class="">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                                        </div>
                                    <input value="<?php echo $fila['email'] ?>" type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="celular" class="control-label">Celular</label>
                                <div class="">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-mobile-phone"></i></span>
                                        </div>
                                    <input value="<?php echo $fila['celular'] ?>" id="phone" type="text" class="form-control" name="celular" placeholder="Celular" required>
                                    </div>
                                </div>
                            </div>

                            <div id="combobox">
                                <input type="hidden" value="<?php echo $tipoUsuario = $fila['tipo_usuario'] ?>" />
                                <label for="tipo_usuario" class=" control-label">Nivel de acceso</label>
                                <div class="">
                                    <select class="custom-select" name="nivel_usuario" action="guardar.php" method="POST">
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
                            </div>
                            <? echo $tipoUsuario ?>
                            <div class="form-group">
                                <div class="">
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
