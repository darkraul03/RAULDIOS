<?php $fecha = date('Y')?>
<!Doctype html>
<html>
<head>Inicio Sesion</title>
	<link rel="stylesheet" href="estilos/estilo.css" />
</head>
<body>
	<section>
		<h1> Inicio Sesion </h1>
		<form>
			<label>Usuario</label>
			<input type="text" name="alumno"/>
			<br/><br/>
			<label> Contraseña </label>
			<input type="password" name="password"/>
			<input type="submit" value= "Iniciar Sesion"/>
		</form>
	</section>
	<footer>
		<section>
			<span>Contactanos</span>
			<span>Soporte</span>
			<span>Ayuda</span>
			<span>Politica de Privacidad</span>
			<span>Terminos de Uso</span>
		</section>
		<section>
			<img src=""/>
			<img src=""/>
			<img src=""/>
			<img src=""/>
		</section>
		<p>&copy; <? echo $fecha ?></p>
	</footer>
</body>
</html>