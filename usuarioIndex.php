<?php
        session_start();
          if(isset($_SESSION['usuario']) && $_SESSION["tipo_usuario"]=="Usuario"){
        }else{                             
        header("location: index.php");                                  
        }
?>
<?php require_once './secciones/header.php';?>
     <?php require_once './secciones/navUsuario.php';?>

<script src="js/bootstrap.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
function alerta() {
    alert("Favor de revisar los tickets abiertos recientemente");
}
</script>

<?php require_once './secciones/footer.php';?>
