
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
<style>
 
body {
  padding-top: 40px;
  padding-bottom: 40px;
  
}
 
.login {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
 
}
 
#sha{
	max-width: 340px;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    -moz-box-shadow:    0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    box-shadow:         0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    border-radius: 6%;
  }
 #avatar{
width: 96px;
height: 96px;
margin: 0px auto 10px;
display: block;
border-radius: 50%;
 } 
 
</style>
	
 
</head>
<body>
	 <?php include('navbar-inc.php');?>

	<div class="container well" id="sha">
		<div class="row">
					<div class="col-xs-12">
						<img src="img/logosmartgsm.png" class="img-responsive" id="avatar">
					</div>
		</div>
 
		<form class="login" action="verificar.php" method="POST">
			<?php 
			if(isset($_GET['error'])){
				echo "Datos no validos";
			}
			 ?>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Usuario" name="Usuario" required autofocus>
				</div>
				
 
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="Password" required>
				</div>
 
 
				<button class="btn btn-lg btn-primary btn-block" type="submit">iniciar sesión</button>
 
				<div class="checkbox">
							
					<label class="checkbox">
				        <input type="checkbox" value="1" name="remember"> No cerrar sesión
				    </label>
				       <p class="help-block"><a href="#">¿No puedes acceder a tu cuenta?</a></p>
				</div>
 
	    </form>
 
		
		
	</div>
 
 
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>