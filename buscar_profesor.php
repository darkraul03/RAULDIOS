<!Doctype html>
<html>
<head>
	<title>Buscar Profesor</title>
	<link rel="stylesheet" href="estilos/estilo.css" />
	<link rel="stylesheet" href="estilos/estilos_listado.css">
	<script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script>
</head>
<body>
	<?php include 'cabecera.php' ?>
	<section id="busqueda">
	<?php if(isset($_SESSION['Nombre'])){ ?>
		<h1> Buscar Profesor</h1>
		<form action="busqueda_resultado.php" method="post">
			<label>Nombre</label>
			<input type="text" id="nombre1" name="nombre" class="txt-box-campos" placeholder="Ingresar nombres" />
			<br/><br/>
			<label> Apellido </label>
			<input type="text" id="apellido1" name="apellido" class="txt-box-campos" placeholder="Ingresar apellidos"/>
			<br/><br/>
			<label> Universidad </label>
			<select id="universidad" name="universidad" >
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
	<?php }else{ ?>
		<div id="nologin">
			<h1> ¡REGÍSTRESE O INICIE SESIÓN! </h1>
			<p>Regístrese o inicie sesión para disfrutar de los beneficios de FINNDER exclusivo para nuestros miembros</p>
			<p>¡Es gratis y siempre lo será! </p>
		</div>
		<div id="nologinlink">
			<a href="inicio_sesion.php">Iniciar sesión</a>
			<a href="registro_usuario.php">Regisrarse</a>
		</div>
	<?php } ?>
	</section>
	<footer>
		<?php include 'pie.php' ?>
	</footer>
	<script type="text/javascript">	
		$(document).ready(function () {
			$("#nombre1").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#nombre1").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
            });
            $("#apellido1").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#apellido1").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
            });
        });
	</script>
</body>
</html>