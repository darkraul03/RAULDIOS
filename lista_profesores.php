<?php

	error_reporting(E_ERROR);
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
<?php $fecha = date('Y')?>
<!Doctype html>
<html>
	<head>
		<title>Lista Profesores</title>
		<link rel="stylesheet" href="estilos/estilo.css" />
	</head>
	<body>
		<?php include 'cabecera.php' ?>
		<section>
			<h1> Lista Profesores </h1>
			<?php 
			# Paso 4: iterar
			while ($fila = mysql_fetch_assoc($request)) {
			?>
								
				<img src="<?php echo $fila['foto'] ?>" height ="200"/>
				<p><?php echo utf8_encode($fila['Nombre']) ?></p>
				<p><?php echo utf8_encode($fila['Apellido']) ?></p>
				<p><?php echo utf8_encode($fila['Universidad']) ?></p>
				<p><?php echo utf8_encode($fila['Curso']) ?></p>
								
			
			<?php } ?>
			<a id="b_profesores" href="buscar_profesor.php">Buscar Profesores</a>

		</section>
	<footer>
		<?php include 'pie.php' ?>
	</footer>
</body>
</html>
<!--$request = mysql_query("SELECT * FROM profes WHERE nombre like $nombre and apellido like $apellido and universidad like $universidad and curso like $curso" -->

