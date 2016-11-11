<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="estilos/estilos_registro.css" type="text/css" >
	<link rel="stylesheet" href="estilos/estilo.css" />
	<script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script>
	
	<title>Formulario</title>
</head>

<body>
	<?php include 'cabecera.php' ?>
	<div class="contenedor-formulario">
	 	<div class="wrap">
	    	<form action="procesar_usuario.php" class="formulario" name="formulario_registro" method="post">
	      		<div>
			        <div class="input-group">
			          	<input type="text" id="usuario" name="usuario" required="required">
			          	<label class="label" for="usuario">Usuario:</label>
			        </div>
			        <div class="input-group">
			          	<input type="text" id="nombres" name="nombres" required="required">
			          	<label class="label" for="nombres">Nombres:</label>
			        </div>
			        <div class="input-group">
			          	<input type="text" id="apellidos" name="apellidos" required="required">
			          	<label class="label" for="apellidos">Apellidos:</label>
			        </div>
			        <div class="input-group">
			          	<input type="text" id="apellidos" name="universidad" required="required">
			          	<label class="label" for="apellidos">Universidad:</label>
			        </div>
			        <div class="input-group">
			          	<input type="email" id="correo" name="correo" required="required">
			          	<label class="label" for="correo">Correo:</label>
			        </div>
			        <div class="input-group">
			          	<input type="password" id="pass" name="pass" required="required">
			          	<label class="label" for="pass">Contraseña:</label>
			        </div>
			        <div class="input-group">
			          	<input type="password" id="pass2" name="pass2" required="required">
			          	<label class="label" for="pass2">Repetir Contraseña:</label>
			        </div>

	        		<input type="submit" id="btn-submit" value="Enviar">
	      		</div>
	    	</form>
	    	<?php if(isset($_GET['error'])){ ?>
				<p>Las Contraseñas no son iguales</p>
			<?php } ?>
	  	</div>
	</div>
	<script src="scripts/reloj.js"></script>
	<footer>
		<?php include 'pie.php' ?>
	</footer>
	<script type="text/javascript" src="scripts/formulario_registro.js"></script>
</body>
</html>