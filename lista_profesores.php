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
		<link rel="stylesheet" type="text/css" href="estilos/estilos_listado.css">
		<script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script>
	</head>
	<body>
		<?php include 'cabecera.php' ?>
		<section id="contlista">
			<form action="busqueda_resultado.php" method="post">
				<input type="text" id="nombre" name="nombre" class="txt-box-campos" placeholder="Ingresar Nombres" tabindex="1" />
				<input type="text" id="apellido" name="apellido" class="txt-box-campos" placeholder="Ingresar Apellidos" tabindex="2" />
				<input type="submit" value="Buscar" tabindex="3" />
			</form>
			<h1> Lista Profesores </h1>
			<a id="b_profesores" href="buscar_profesor.php">Busqueda Avanzada</a>
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
			<a id="b_profesores" href="buscar_profesor.php">Busqueda Avanzada</a>
		</section>
	<footer>
		<?php include 'pie.php' ?>
	</footer>
	<script type="text/javascript">	
		$(document).ready(function () {
			$("#nombre").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#nombre").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
            });
            $("#apellido").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#apellido").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
            });
        });
	</script>
</body>
</html>

