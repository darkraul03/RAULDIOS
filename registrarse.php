<?php $fecha = date('Y')?>
<!Doctype html>
<html>
<head>
	<title>Registrarse</title>
	<link rel="stylesheet" href="estilos/estilo.css" />
</head>
<body>
	<section>
		<h1 id="h1registrarse"> Registrarse </h1>
		<form>
			<label>Correo Electronico</label>
			<input type="text" name="correo"/>
			<br/><br/>
			<label> Usuario </label>
			<input type="text" name="usuario"/>
			<br/><br/>
			<label> Nombre </label>
			<input type="text" name="nombre"/>
			<br/><br/>
			<label> Apellido </label>
			<input type="text" name="apellido"/>
			<br/><br/>
			<label> Contraseña </label>
			<input type="password" name="contraseña"/>
			<br/><br/>
			<label> Confirmar Contraseña </label>
			<input type="password" name="confirmar"/>
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
			<input type="submit" value= "Registrarme"/>
			<br/><br/>
			<a href="index.php"> Pagina Principal</a>
		</form>
	</section>
	<?php include 'pie.php' ?>		
</body>
</html>