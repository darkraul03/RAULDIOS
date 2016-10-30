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
			<select name="universidad">
				<option> Universidad San Ignacio de Loyola </option>
				<option> Pontificie Universidad Catolica del Peru </option>
				<option> Universidad de Lima </option>
				<option> Universidad Pacifico </option>
				<option> Universidad Cesar Vallejo</option>
			</select>
			<br/><br/>
			<label> Curso  </label>
			<input type="text" name="curso"/>
			<br/><br/>
			<input type="submit" value= "Buscar Profesor"/>
		</form>
	</section>
	<footer>
		<?php include 'pie.php' ?>
	</footer>
</body>
</html>