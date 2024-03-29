<?php 
require_once ("conexion/conexion.php"); 
session_start();
    if(isset($_SESSION['usuario']) && $_SESSION["tipo_usuario"]=="Administrador"){
} else {                             
header("location: index.php");                                  
}       
?>

<head>
    <title>Help Desk</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        function drawChart() {
            // call ajax function to get sports data
            var jsonData = $.ajax({
                url: "metodos/graficaCircularMarca.php",
                dataType: "json",
                async: false,
            }).responseText;

            var options = {
                title: 'Marcas',
                is3D: true,
                width: "100%",
                height: "90%"
            };
            //The DataTable object is used to hold the data passed into a visualization.
            var data = new google.visualization.DataTable(jsonData);

            // To render the pie chart.
            var chart = new google.visualization.PieChart(document.getElementById('chart_container'));
            chart.draw(data, options);
        }
        // load the visualization api
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

    </script>
    <script type="text/javascript">
        function drawChart2() {
            // call ajax function to get sports data
            var jsonData = $.ajax({
                url: "metodos/graficaCircularProblema.php",
                dataType: "json",
                async: false,
            }).responseText;

            var options = {
                title: 'Tipo de Problemas',
                is3D: true,
                width: "100%",
                height: "90%"
            };
            //The DataTable object is used to hold the data passed into a visualization.
            var data = new google.visualization.DataTable(jsonData);

            // To render the pie chart.
            var chart = new google.visualization.PieChart(document.getElementById('chart_container2'));
            chart.draw(data, options);
        }
        // load the visualization api
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart2);

    </script>
</head>

<?php require_once './secciones/navAdmin.php';?>
<div style="background-image: url('img/tecnologiatextura.png'); ">
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <h4 class="textgrafica" style="text-align: center;"><strong>Marcas de Computadoras Dañadas</strong></h4>
                <br>
                <div class="tabla" id="chart_container"></div>
            </div>
            <br>
            <br>
            <div class="col-md-6 ">
                <h4 class="textgrafica" style="text-align: center;"><strong>Tipo de problemas</strong></h4>
                <br>
                <div class="tabla" id="chart_container2"></div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="container">
        <div class="jumbotron">
            <h1>Tickets Abiertos <span style="font-size: 40px;"> 
                <span class=" fas fa-ticket-alt"> </span>
            </span></h1>
            <p>Aqui se podran observar los tickets pendientes por darles solucion.</p>
        </div>
        <div class="table-responsive">
            <table class="tabla table table-bordered table-hover table-striped" id="tablatickets">
                <thead class="thead-light">
                    <th>ID</th>
                    <th>Fecha de apertura</th>
                    <th>Usuario de apertura</th>
                    <th>Marca</th>
                    <th>Red</th>
                    <th>Nº de Equipo</th>
                    <th>Tipo de Problema</th>
                    <th>Problema</th>
                    <th>Finalizo</th>
                    <th>Técnico de respuesta</th>
                    <th>Respuesta</th>
                    <?php 
                $id = $_SESSION["id"];
                $sel = $con->query("SELECT*FROM tickets where id_usuario = $id and estatus='activo'");
                while ($fila = $sel -> fetch_assoc()) {
            ?>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $fila['id']?></td>
                        <td><?php echo $fila['fecha_inicio']?></td>
                        <td><?php echo $fila['nombre_usuario']?></td>
                        <td><?php echo $fila['marca']?></td>
                        <td><?php echo $fila['red']?></td>
                        <td><?php echo $fila['equipo']?></td>
                        <td><?php echo $fila['tipo_problema']?></td>
                        <td><?php echo $fila['problema']?></td>
                        <td><?php echo $fila['fecha_fin']?></td>
                        <td><?php echo $fila['nombre_tecnico']?></td>
                        <td><?php echo $fila['respuesta']?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
        <br>
        <div class="jumbotron">
            <h1>Tickets Cerrados <span style="font-size: 40px;"> 
                <span class="fa fa-close"> </span></h1>
            <p>Aqui se podran observar los tickets que ya se les dio solucion.</p>
        </div>
        <div class="table-responsive">
            <table class="tabla table-bordered table-hover table table-striped" id="tablatickets">
                <thead class="thead-light">
                    <th>ID</th>
                    <th>Fecha de apertura</th>
                    <th>Usuario de apertura</th>
                    <th>Marca</th>
                    <th>Red</th>
                    <th>Nº de Equipo</th>
                    <th>Tipo de Problema</th>
                    <th>Problema</th>
                    <th>Finalizo</th>
                    <th>Técnico de respuesta</th>
                    <th>Respuesta</th>
                    <?php 
                $id = $_SESSION["id"];
                $sel = $con->query("SELECT*FROM tickets where id_tecnico = $id and estatus='activo'");
                while ($fila = $sel -> fetch_assoc()) {
            ?>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $fila['id']?></td>
                    <td><?php echo $fila['fecha_inicio']?></td>
                    <td><?php echo $fila['nombre_usuario']?></td>
                    <td><?php echo $fila['marca']?></td>
                    <td><?php echo $fila['red']?></td>
                    <td><?php echo $fila['equipo']?></td>
                    <td><?php echo $fila['tipo_problema']?></td>
                    <td><?php echo $fila['problema']?></td>
                    <td><?php echo $fila['fecha_fin']?></td>
                    <td><?php echo $fila['nombre_tecnico']?></td>
                    <td><?php echo $fila['respuesta']?></td>
                </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    <?php require_once './secciones/footer.php';?>
</div>
