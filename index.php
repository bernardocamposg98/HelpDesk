<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
	<script src="js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="container">    
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title" id="title">Help Desk</div>
				</div>    
				<form action="metodos/login.php" method ="post" autocomplete="off">
					<div style="padding-top:30px" class="panel-body" >
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						<form id="loginform" class="form-horizontal" role="form" method="POST" autocomplete="off">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario" type="text" class="form-control" name="usuario_i" value="" placeholder="usuario" required>                                        
							</div>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="password_i" placeholder="password" required>
							</div>
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls" >
									<button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesión</a>
								</div>
							</div>
						</form>
					</div>
				</form>                     
			</div>  
		</div>
	</div>
</body>
</html>				