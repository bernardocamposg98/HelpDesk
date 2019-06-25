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
                <label class="col-md-9 control-label" nombre="nombreusuario" ><?php echo $fila['usuario']?></label>
            </div>
            <div calss="col-md-12">
                <label for="fecha" class="col-md-3 control-label">Fecha de apertura:</label>
                <label class="col-md-9 control-label" nombre="nombreusuario" ><?php echo $fila['fecha']?></label>
            <div class="col-md-12">
                <label for="marca" class="col-md-3 control-label">Marca:</label>
                <input value="<?php echo $fila['marca']?>" class="col-md-2" type="text" maxlength="30" name="marca"/>
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
                <label for="Problema" class="col-md-3 control-label">Problema:</label>
                <textarea name="problema" rows="10" cols="40" required><?php echo $fila['problema']?></textarea>
            </div>
            <div class="col-md-12">
                <label class="col-md-3 control-label" nombre="usuarioresp" >Nombre del técnico:</label>
                <label class="col-md-9 control-label" nombre="usuarioresp" ><?php echo $fila['usuarioresp']?></label>
            </div>
            <div calss="col-md-12">
                <label for="finalizo" class="col-md-3 control-label">Finalizo:</label>
                <label name="finalizo" class="col-md-9 control-label" nombre="nombreusuario" ><?php echo $fila['finalizo']?></label>
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
     