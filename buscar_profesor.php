<!Doctype html>
<html>
<head>
	<title>Buscar Profesor</title>
	<link rel="stylesheet" href="estilos/estilo.css" />
</head>
<body>
	<?php include 'cabecera.php' ?>
	<section>
		<h1> Buscar Profesor</h1>
		<form action="busqueda_resultado.php" method="post">
			<label>Nombre</label>
			<input type="text" name="nombre"/>
			<br/><br/>
			<label> Apellido </label>
			<input type="text" name="apellido"/>
			<br/><br/>
			<label> Universidad </label>
			<select name="universidad">
				<option value=""> -- Elige una Universidad -- </option>
				<option value="Universidad San Ignacio de Loyola"> Universidad San Ignacio de Loyola </option>
				<option value="Pontificia Universidad Catolica del Peru"> Pontificia Universidad Católica del Perú </option>
				<option value="Universidad de Lima"> Universidad de Lima </option>
				<option value="Universidad Pacifico"> Universidad Pacifico </option>
				<option value="Universidad Cesar Vallejo"> Universidad Cesar Vallejo</option>
			</select>
			<br/><br/>
			<label> Curso  </label>
			<select name="curso">
				<option value=""> -- Elige un Curso -- </option>
				<option value="Calculo I"> Calculo I </option>
				<option value="Calculo II"> Calculo II </option>
				<option value="College Algebra"> College Algebra </option>
				<option value="Filosofia Social"> Filosofía Social </option>
				<option value="Fundamentos de los Sistemas de Informacion"> Fundamentos de los Sistemas de Informacion</option>
				<option value="Programacion Orientada a Objetos"> Programacion Orientada a Objetos</option>
				<option value="Quimica Pura"> Quimica Pura </option>
				<option value="Seminario de Tesis"> Seminario de Tesis </option>
				<option value="Taller de Software II"> Taller de Software II </option>
				<option value="Total Wellness"> Total Wellness </option>
			</select>
			<br/><br/>
			<input type="submit" value= "Buscar Profesor"/>			
		</form>
	</section>
	<footer>
		<?php include 'pie.php' ?>
	</footer>
</body>
</html>