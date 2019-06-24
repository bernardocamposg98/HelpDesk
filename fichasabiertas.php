<?php
        session_start();
          if(isset($_SESSION['u_usuario']) && $_SESSION["tipo_usuario"]=="Admin"){
           
        }else{                             
        header("location: index.php");                                  
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel = "stylesheet" href="css/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fichas Abiertas</title>
</head>
<body>
        <ul class="nav nav-pills" id ="adminletra">
                <li class="active"><a href="administrador.php">regresar</a></li>
        </ul>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <img id = "log" src="img/logotipo.png">
        <div class="container">
                <h2>Tickets En Help Desk System CBTIS #110</h2>
                <br>
                <br>  
                <table  class="table table-striped" id="tabtoclesp">
                      <th>ID</th>
                      <th>Fecha de apertura</th>
                      <th>Usuario de apertura</th>
                      <th>equipo</th>
                      <th>red</th>
                      <th>Problema</th>
                      <th>Respuesta</th>
                      <th>Cerrar</th>
                      <?php
                    $sel = $con  -> query("SELECT * FROM tickets WHERE finalizo IS NULL");
                    while ($fila = $sel -> fetch_assoc()) {
                    ?>
                    <tr>
                    <td><?php echo $fila['id']?></td>
                      <td><?php echo $fila['fecha']?></td>
                      <td><?php echo $fila['equipo']?></td>
                      <td><?php echo $fila['red']?></td>
                      <td><?php echo $fila['problema']?></td>

                      <form action ="guardresp.php" method="post">
                      <td><td><textarea name="resp" rows="10" cols="40" style="margin: 0px; height: 55px; width: 287px;"></textarea></td></td>
                      <input type="hidden" name="id" value="<?php echo $fila['id']?>" >
                      <td><button id="btn-signup" type="submit" class="btn btn-warning"><i value = "Guardar" ></i>Cerrar</button></td>
                </form>
                    
                    </tr>
                    <?php } ?>
                    </table>
              </div>
</body>
</html>