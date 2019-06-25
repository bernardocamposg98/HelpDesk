<?php 
session_start();
    if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
} else {                             
header("location: index.php");                                  
}       
?> 
<?php require_once './secciones/header.php';?>
     <?php require_once './secciones/navAdmin.php';?>

	<div> 
		<h1 class="text-center">Analisis General</h1>
	</div>
    <?php require_once './secciones/footer.php';?>

