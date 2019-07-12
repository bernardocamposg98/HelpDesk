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
        <h1>Modificar Ticket</h1>
        <p>Aqui se podras modificar el Ticket.</p>
    </div>
    <div class="row justify-content-center">
        <div id="" style="margin-top:10px" class="mainbox col-md-10 col-lg-10 col-xl-6 col-sm-12">
            <?php
        $id=$_GET['id'];
        $sel = $con->query("SELECT * FROM tickets WHERE id = $id");
        while ($fila = $sel -> fetch_assoc()) {
        ?>
            <div class="ticketNuevo panel panel-info">
            <div class="panel-body">
            <form action="metodos/modificarTicket.php" method="post">
                <input value="<?php echo $fila['id']?>" name="id" type="hidden" />
                <div class="">
                    <label class="col-md-12 control-label" nombre="nombreusuario">Nombre del usuario: <strong><?php echo $fila['nombre_usuario']?></strong></label>
                   
                </div>
                <label for="fecha" class="col-md-12 control-label">Fecha de apertura: <strong><?php echo $fila['fecha_inicio']?></strong></label>
                
                <div class="col-md-12">
                    <input type="hidden" value="<?php echo $marca = $fila['marca'] ?>" />
                    <label for="marca" class=" control-label">Marca:</label>
                    
                    <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                                    </div>
                    <select class="custom-select" name="marca">
                        <?php if ($marca == 'Acer') { 
                        echo '
                        <option selected value="Acer">Acer</option>
                        <option value="Asus">Asus</option>
                        <option value="Apple">Apple</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Toshiba">Toshiba</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($marca == 'Asus') { 
                        echo '
                        <option value="Acer">Acer</option>
                        <option selected value="Asus">Asus</option>
                        <option value="Apple">Apple</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Toshiba">Toshiba</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($marca == 'Apple') { 
                        echo '
                        <option value="Acer">Acer</option>
                        <option value="Asus">Asus</option>
                        <option selected value="Apple">Apple</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Toshiba">Toshiba</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($marca == 'Lenovo') { 
                        echo '
                        <option value="Acer">Acer</option>
                        <option value="Asus">Asus</option>
                        <option value="Apple">Apple</option>
                        <option selected value="Lenovo">Lenovo</option>
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Toshiba">Toshiba</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($marca == 'Dell') { 
                        echo '
                        <option value="Acer">Acer</option>
                        <option value="Asus">Asus</option>
                        <option value="Apple">Apple</option>
                        <option value="Lenovo">Lenovo</option>
                        <option selected value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Toshiba">Toshiba</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($marca == 'HP') { 
                        echo '
                        <option value="Acer">Acer</option>
                        <option value="Asus">Asus</option>
                        <option value="Apple">Apple</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Dell">Dell</option>
                        <option selected value="HP">HP</option>
                        <option value="Toshiba">Toshiba</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($marca == 'Toshiba') { 
                        echo '
                        <option value="Acer">Acer</option>
                        <option value="Asus">Asus</option>
                        <option value="Apple">Apple</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option selected value="Toshiba">Toshiba</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($marca == 'Samsung') { 
                        echo '
                        <option value="Acer">Acer</option>
                        <option value="Asus">Asus</option>
                        <option value="Apple">Apple</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Toshiba">Toshiba</option>
                        <option selected value="Samsung">Samsung</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($marca == 'Otro') { 
                        echo '
                        <option value="Acer">Acer</option>
                        <option value="Asus">Asus</option>
                        <option value="Apple">Apple</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Toshiba">Toshiba</option>
                        <option value="Samsung">Samsung</option>
                        <option selected value="Otro">Otro</option>
                        ';
                    }
                    ?>
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
                    <input value="<?php echo $fila['equipo']?>" class="form-control" type="text" size="5" maxlength="30" name="equipo" />
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
                    <input value="<?php echo $fila['red']?>" class="form-control" type="text" maxlength="30" name="red" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="hidden" value="<?php echo $tipoProblema = $fila['tipo_problema'] ?>" />
                    <label for="tipo_problema" class=" control-label">Tipo de Problema:</label>
                    <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-microchip"></i></span>
                                    </div>
                    <select class="custom-select" name="tipo_problema">
                        <?php if ($tipoProblema == 'Software') { 
                        echo '
                        <option selected value="Software">Software</option>
                        <option value="Hardware">Hardware</option>
                        <option value="Red">Red</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($tipoProblema == 'Hardware') { 
                        echo '
                        <option value="Software">Software</option>
                        <option selected value="Hardware">Hardware</option>
                        <option value="Red">Red</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($tipoProblema == 'Red') { 
                        echo '
                        <option value="Software">Software</option>
                        <option value="Hardware">Hardware</option>
                        <option selected value="Red">Red</option>
                        <option value="Otro">Otro</option>
                        ';
                    }
                    if ($tipoProblema == 'Otro') { 
                        echo '
                        <option value="Software">Software</option>
                        <option value="Hardware">Hardware</option>
                        <option value="Red">Red</option>
                        <option selected value="Otro">Otro</option>
                        ';
                    }
                    ?>
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
                    <textarea name="problema" rows="10" cols="40" required><?php echo $fila['problema']?></textarea>
                         </div>
                    </div>
                    
                </div>
                <div calss="col-md-12">
                    <input type="hidden" value="<?php echo $fila['fecha_fin']?>" name="finalizo">
                    <label for="finalizo" class="col-md-12 control-label">Finalizo: <strong><?php echo $fila['fecha_fin']?> </strong></label>

                </div>
                <div class="col-md-12">
                    <label class="control-label" nombre="usuarioresp">Nombre del técnico:</label>
                    <label class=" control-label" nombre="usuarioresp"><strong><?php echo $fila['nombre_tecnico']?></strong></label>
                </div>
                <div class="col-md-12">
                    <label for="respuesta" class=" control-label">Respuesta:</label>
                     <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="	fas fa-tools"></i></span>
                                    </div>
                    <input value="<?php echo $fila['respuesta']?>" class="form-control" type="text" size="5" maxlength="30" name="respuesta" />
                </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div >
                        <button id="btn-signup" type="submit" class="form-control btn btn-success" value="Guardar">MODIFICAR</button>
                    </div>
                </div>
                
            </form>
            <?php } ?>
            </div>
        </div>
    </div>

<?php require_once './secciones/footer.php';?>
