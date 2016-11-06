<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="estilos/estilos_registro.css" type="text/css" > 
	<script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script>
	
	<title>Formulario</title>
</head>

<body>

	<div class="contenedor-formulario">
	 	<div class="wrap">
	    	<form action="procesar_usuario1.php" class="formulario" name="formulario_registro" method="post">
	      		<div>
			        <div class="input-group">
			          	<input type="text" id="nombres" name="nombres">
			          	<label class="label" for="nombres">Nombres:</label>
			        </div>
			        <div class="input-group">
			          	<input type="text" id="apellidos" name="apellidos">
			          	<label class="label" for="apellidos">Apellidos:</label>
			        </div>
			        <div class="input-group">
			          	<input type="email" id="correo" name="correo">
			          	<label class="label" for="correo">Correo:</label>
			        </div>
			        <div class="input-group">
			          	<input type="password" id="pass" name="pass">
			          	<label class="label" for="pass">Contraseña:</label>
			        </div>
			        <div class="input-group">
			          	<input type="password" id="pass2" name="pass2">
			          	<label class="label" for="pass2">Repetir Contraseña:</label>
			        </div>
			        <!--
			        <div class="input-group radio">
			          	<input type="radio" name="sexo" id="hombre" value="Hombre">
			          	<label for="hombre">Hombre</label>

			          	<input type="radio" name="sexo" id="mujer" value="Mujer">
			          	<label for="mujer">Mujer</label>
			        </div>
			        <div class="input-group checkbox">
			          	<input type="checkbox" name="terminos" id="terminos" value="true">
			          	<label for="terminos">Acepto los Terminos y Condiciones</label>
			        </div>-->

	        		<input type="submit" id="btn-submit" value="Enviar">
	      		</div>
	    	</form>
	  	</div>
	</div>
	<script type="text/javascript" src="scripts/formulario_registro.js"></script>
</body>
</html>