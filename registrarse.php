<?php $fecha = date('Y')?>
<!Doctype html>
<html>
<head>
	<title>Registrarse</title>
	<link rel="stylesheet" href="estilos/estilo.css" />
</head>
<body>
	<section>
		<h1> Registrarse </h1>
		<form>
			<label>Correo Electronico</label>
			<input type="text" name="correo"/>
			<br/><br/>
			<label> Usuario </label>
			<input type="text" name="usuario"/>
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