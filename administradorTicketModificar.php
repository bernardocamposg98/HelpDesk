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
		<h2>Modificar Ticket</h2>
		<br>
        <?php
        $id=$_GET['id'];
        $sel = $con->query("SELECT * FROM tickets WHERE id = $id");
        while ($fila = $sel -> fetch_assoc()) {
        ?>
        <form action ="metodos/modificarTicket.php" method="post">
            <input value="<?php echo $fila['id']?>" name="id" type="hidden"/>
            <div class="col-md-12">
                <label class="col-md-3 control-label" nombre="nombreusuario" >Nombre del usuario:</label>
                <label class="col-md-5 control-label" nombre="nombreusuario" ><?php echo $fila['nombre_usuario']?></label>
            </div>
            <label for="fecha" class="col-md-3 control-label">Fecha de apertura:</label>
            <label class="col-md-5 control-label" nombre="nombreusuario" ><?php echo $fila['fecha_inicio']?></label>
            <div class="col-md-12">
                <input type="hidden" value="<?php echo $marca = $fila['marca'] ?>"/>
                <label for="marca" class="col-md-3 control-label">Marca:</label>
                <select name="marca">
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
            <div class="col-md-12">
                <label for="equipo" class="col-md-3 control-label">Nº de Equipo:</label>
                <input value="<?php echo $fila['equipo']?>" class="col-md-2" type="text" size="5" maxlength="30" name="equipo"/>
            </div>
            <div class="col-md-12">
                <label for="red" class="col-md-3 control-label">Red:</label>
                <input value="<?php echo $fila['red']?>" class="col-md-3" type="text" maxlength="30" name="red"/>
            </div>
            <div class="col-md-12">
                <input type="hidden" value="<?php echo $tipoProblema = $fila['tipo_problema'] ?>"/>
                <label for="tipo_problema" class="col-md-3 control-label">Tipo de Problema:</label>
                <select name="tipo_problema">
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
            <div class="col-md-12">
                <label for="Problema" class="col-md-3 control-label">Problema:</label>
                <textarea name="problema" rows="10" cols="40" required><?php echo $fila['problema']?></textarea>
            </div>
            <div calss="col-md-12">
                <input type="hidden" value="<?php echo $fila['fecha_fin']?>" name="finalizo">
                <label for="finalizo" class="col-md-3 control-label">Finalizo:</label>
                <label class="col-md-5 control-label" nombre="nombreusuario" ><?php echo $fila['fecha_fin']?></label>
            </div>
            <div class="col-md-12">
                <label class="col-md-3 control-label" nombre="usuarioresp" >Nombre del técnico:</label>
                <label class="col-md-5 control-label" nombre="usuarioresp" ><?php echo $fila['nombre_tecnico']?></label>
            </div>
            <div class="col-md-12">
                <label for="respuesta" class="col-md-3 control-label">Respuesta:</label>
                <input value="<?php echo $fila['respuesta']?>" class="col-md-2" type="text" size="5" maxlength="30" name="respuesta"/>
            </div>	
            <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                    <button id="btn-signup" type="submit" class="btn btn-info" value ="Guardar"><i class="icon-hand-right"></i>MODIFICAR</button> 
                </div>
            </div>
        </form>
        <?php } ?>
	</div>
<?php require_once './secciones/footer.php';?>
     