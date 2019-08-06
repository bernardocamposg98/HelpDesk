<?php
	require_once ("./conexion/conexion.php"); 
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
        <h1>Nuevo Ticket <span style="font-size: 40px;"> 
                <span class=" fas fa-edit"> </span>
            </span> </h1>
        <p>Aqui se podran dar de alta nuevos Tickets..</p>
    </div>
    <div class="row justify-content-center">
        <div id="" style="margin-top:10px" class="mainbox col-md-10 col-lg-10 col-xl-6 col-sm-12">
            <div class="ticketNuevo panel panel-info">
                <div class="panel-body">
                    <form action="metodos/administradorGuardarTicketNuevo.php" method="post">
                        <div class="">
                            <label class=" control-label" nombre="nombreusuario">Nombre:</label>
                            <label class=" control-label" nombre="nombreusuario"><?php echo $_SESSION['nombre']?></label>
                        </div>
                        <input type="hidden" name="nombre_usuario" value="<?php echo $_SESSION['nombre']; ?>" />
                        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id']; ?>" />
                        <div class="col-md-12">
                            <label for="marca" class=" control-label">Marca:</label>
                            <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                                    </div>
                                    <select class="custom-select" name="marca">
                                        <option value="Acer">Acer</option>
                                        <option value="Asus">Asus</option>
                                        <option value="Apple">Apple</option>
                                        <option value="Lenovo">Lenovo</option>
                                        <option value="Dell">Dell</option>
                                        <option value="HP">HP</option>
                                        <option value="Toshiba">Toshiba</option>
                                        <option value="Samsung">Samsung</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="equipo" class=" control-label">Nº de Equipo:</label>
                            <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                    </div>
                                    <input class="form-control" type="text" size="5" maxlength="30" name="equipo" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="red" class=" control-label">Red:</label>
                            <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-code-branch"></i></span>
                                    </div>
                                    <input class="form-control" type="text" maxlength="30" name="red" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="tipo_problema" class="control-label">Tipo de Problema:</label>
                            <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-microchip"></i></span>
                                    </div>
                                    <select class="custom-select" name="tipo_problema">
                                        <option value="Software">Software</option>
                                        <option value="Hardware">Hardware</option>
                                        <option value="Red">Red</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="Problema" class=" control-label">Problema:</label>
                            <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="	fas fa-tools"></i></span>
                                    </div>
                                    <textarea name="problema" rows="10" cols="45" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <button id="btn-signup" type="submit" class="form-control btn btn-success" value="Guardar"><i class="icon-hand-right"></i>Registrar <span class="fa fa-plus"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once './secciones/footer.php';?>
