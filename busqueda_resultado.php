<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	mysql_connect('localhost', 'root','') or die(mysql_error());
	
	mysql_select_db('finnder') or die(mysql_error());

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$uni = $_POST['universidad'];
	$curso = $_POST['curso'];

	//$query = "SELECT * FROM profe WHERE Nombre LIKE '%$nombre%'";

	

	if($apellido == "" && $uni == "" && $curso ==""){

		$query = "SELECT * FROM profe WHERE Nombre LIKE '%$nombre%'";

	}else if($nombre == "" && $uni == "" && $curso == ""){

		$query = "SELECT * FROM profe WHERE Apellido LIKE '%$apellido%'";

	}else if($nombre == "" && $apellido == "" && $curso ==""){

		$query = "SELECT * FROM profe WHERE Universidad LIKE '$uni'";

	}else if($nombre == "" && $apellido == "" && $uni ==""){

		$query = "SELECT * FROM profe WHERE Curso LIKE '$curso'";

	}else if($uni == "" && $curso ==""){

		$query = "SELECT * FROM profe WHERE Nombre LIKE '%$nombre%' AND Apellido LIKE '%$apellido%' ";

	}else if($nombre == "" && $curso == ""){

		$query = "SELECT * FROM profe WHERE Apellido LIKE '%$apellido%' AND Universidad LIKE '$uni'";

	}else if($nombre == "" && $apellido == ""){

		$query = "SELECT * FROM profe WHERE Universidad LIKE '$uni' AND Curso LIKE '$curso'";

	}else if($apellido == "" && $curso == ""){

		$query = "SELECT * FROM profe WHERE Nombre LIKE '%$nombre%' AND Universidad LIKE '$uni'";

	}else if($apellido == "" && $uni == ""){

		$query = "SELECT * FROM profe WHERE Nombre LIKE '%$nombre%' AND Curso LIKE '$curso'";

	}else if($nombre == "" && $uni == ""){

		$query = "SELECT * FROM profe WHERE Apellido LIKE '%$apellido%' AND Curso LIKE '$curso'";

	}else if($curso == ""){

		$query = "SELECT * FROM profe WHERE Nombre LIKE '%$nombre%' AND Apellido LIKE '%$apellido%' AND Curso LIKE '$curso'";

	}else if($nombre == ""){

		$query = "SELECT * FROM profe WHERE Apellido LIKE '%$apellido%' AND Universidad LIKE '$uni' AND Curso LIKE '$curso'";

	}else if($uni == ""){

		$query = "SELECT * FROM profe WHERE Nombre LIKE '%$nombre%' AND Apellido LIKE '%$apellido%' AND Curso LIKE '$curso'";

	}else if($apellido == ""){

		$query = "SELECT * FROM profe WHERE Nombre LIKE '%$nombre%' AND Universidad LIKE '$uni' AND Curso LIKE '$curso'";

	}else if($nombre == "" && $apellido == "" && $uni == "" && $curso ==""){

		header('Location: buscar_profesor.php?error=1');

	}else{

		$query = "SELECT * FROM profe WHERE Nombre LIKE '%$nombre%' AND Apellido LIKE '%$apellido%' AND Universidad LIKE '$uni' AND Curso LIKE '$curso'";

	}

	$request = mysql_query($query);
?>
<!Doctype html>
<html>
	<head>
		<title>Resultado Profesores</title>
		<link rel="stylesheet" href="estilos/estilo.css" />
	</head>
	<body>
		<?php include 'cabecera.php' ?>
		<section id="contlista">
			<h1> Resultado Profesores </h1>
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