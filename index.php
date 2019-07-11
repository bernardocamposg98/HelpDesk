<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
       
</head>
<body style="background-image: url('img/tecnologiatextura.png'); ">
    <h1 class="titleIndex"><strong>Bienvenidos</strong></h1>
     <h5 class="titleIndex"><strong>HelpDesk</strong></h5>
    <div class="container w3-animate-zoom">
        <div class="row justify-content-center">
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-10 col-lg-10 col-xl-6 col-sm-12">
                 <div class="login" >
                <div class="panel panel-info ">
                   
                    <form action="metodos/login.php" method="post" autocomplete="off">
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form" method="POST" autocomplete="off">
                            <div  class="input-group">
                                <label name="usuario">Usuario</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="Usuario..." required>
                                </div>
                            </div>
                            <div class="input-group">
                                 <label name="password">Contraseña</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-lock"></i></span>
                                    </div>    
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña..." required>
                                </div>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <div class="controls">
                                    <button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesión</a>
                                </div>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
