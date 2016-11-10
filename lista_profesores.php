<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	# Paso 1: conectarse
	mysql_connect('localhost','root','') or die(mysql_error());
	#Paso 2: seleccionar
	mysql_select_db('finnder') or die(mysql_error());
	
?>

<?php
	//Paso 1
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$universidad = $_POST['universidad'];	
	$curso = $_POST['curso'];	

	$request = mysql_query("SELECT * FROM profe")
?>

<!Doctype html>
<html>
	<head>
		<title>Lista Profesores</title>
		<link rel="stylesheet" href="estilos/estilo.css" />
	</head>
	<body>
		<?php include 'cabecera.php' ?>
		<section id="contlista">
			<h1> Lista Profesores </h1>
			<a id="b_profesores" href="buscar_profesor.php">Buscar Profesores</a>
			<div>
				<?php 
				# Paso 4: iterar
				while ($fila = mysql_fetch_assoc($request)) {
				?>
					<div id="lista">
						<form id="formestrella">
							<p class="clasificacion">
						    	<input class="estrella" id="radio1" type="radio" name="estrellas<?php echo $fila['codigo'] ?>" value="5">
						    	<label class="calificar" for="radio1">★</label>
						    	<input class="estrella" id="radio2" type="radio" name="estrellas<?php echo $fila['codigo'] ?>" value="4">
						    	<label class="calificar" for="radio2">★</label>
						    	<input class="estrella" id="radio3" type="radio" name="estrellas<?php echo $fila['codigo'] ?>" value="3">
						    	<label class="calificar" for="radio3">★</label>
						    	<input class="estrella" id="radio4" type="radio" name="estrellas<?php echo $fila['codigo'] ?>" value="2">
						    	<label class="calificar" for="radio4">★</label>
						    	<input class="estrella" id="radio5" type="radio" name="estrellas<?php echo $fila['codigo'] ?>" value="1">
						    	<label class="calificar" for="radio5">★</label>
						  	</p>
						</form>				
						<img src="<?php echo $fila['foto'] ?>" width ="200"/>
						<span>Nombre:</span>
						<p><?php echo utf8_encode($fila['Nombre']) ?> <?php echo utf8_encode($fila['Apellido']) ?></p>
						<span>Universidad:</span>
						<p><?php echo utf8_encode($fila['Universidad']) ?></p>
						<span>Curso:</span>
						<p><?php echo utf8_encode($fila['Curso']) ?></p>
					</div>				
				<?php } ?>
			</div>
			<a id="b_profesores" href="buscar_profesor.php">Buscar Profesores</a>
		</section>
	<footer>
		<?php include 'pie.php' ?>
	</footer>
</body>
</html>
<!--$request = mysql_query("SELECT * FROM profes WHERE nombre like $nombre and apellido like $apellido and universidad like $universidad and curso like $curso" -->

