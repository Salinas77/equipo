<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href='css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href='css/styles-login.css'>

	<style type="text/css">
	</style>
</head>

<!-- inicio formulario-->
<body>
	<div id="myModal" class="container">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<div class="avatar">
						<img src='img/user.png' alt="Avatar">
					</div>				
					<h4 class="modal-title">Iniciar Sesión</h4>	
       			</div>
				<div class="modal-body">
					<form action="modulos/controladorLogin.php" method="POST">
						<div class="form-group">
							<input type="text" class="form-control" name="usuario" placeholder="Usuario" required="required" autofocus>		
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="pass" placeholder="Contraseña" required="required">	
						</div>        
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Iniciar</button>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<a href="#">Olvido su contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- fin formulario-->
</html>