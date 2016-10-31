<?php $fecha = date('Y')?>
<!Doctype html>
<html>
<head>
	<title>Inicio Sesion</title>
	<link rel="stylesheet" href="estilos/estilo.css" />
</head>
<body>
	<section id="inicio">
		<h1 id="h1inicio"> Inicio Sesion </h1>
		<form>
			<label class="labelinicio">Usuario</label>
			<input type="text" name="alumno"/>
			<br/><br/>
			<label class="labelinicio">Contraseña</label>
			<input type="password" name="password"/>
			<br/><br/>
			<input type="submit" value= "Iniciar Sesion"/>
			<br/><br/>
			<a href="index.php"> Pagina Principal</a>
		</form>
	</section>
	<?php include'pie.php' ?>
</body>
</html>