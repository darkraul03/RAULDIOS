<?php $fecha = date('Y')?>
<!Doctype html>
<html>
<head>
	<title>Buscar Profesor</title>
	<link rel="stylesheet" href="estilos/estilo.css" />
</head>
<body>
	<section>
		<h1> Buscar Profesor</h1>
		<form>
			<label>Nombre</label>
			<input type="text" name="nombre"/>
			<br/><br/>
			<label> Apellido </label>
			<input type="text" name="apellido"/>
			<br/><br/>
			<label> Universidad </label>
			<input type="text" name="universidad"/>
			<br/><br/>
			<label> Curso  </label>
			<input type="text" name="universidad"/>
			<br/><br/>
			<input type="submit" value= "Buscar Profesor"/>
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
		<p>&copy; <?php echo $fecha ?></p>
	</footer>
</body>
</html>