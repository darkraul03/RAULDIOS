<?php $fecha = date('Y')?>
<!Doctype html>
<html>
<head>
	<title>Inicio Sesion</title>
	<link rel="stylesheet" href="estilos/estilo.css" />
</head>
<body>
	<?php include 'cabecera.php' ?>
	<section id="inicio">
		<h1 id="h1inicio"> Inicio Sesion </h1>
		<form action="proceso_login.php" method="post">
			<label class="labelinicio">Usuario</label>
			<input type="text" name="usuario"/>
			<br/><br/>
			<label class="labelinicio">Contraseña</label>
			<input type="password" name="password"/>
			<br/><br/>
			<input type="submit" value= "Iniciar Sesion"/>
		</form>
		<?php if(isset($_GET['error'])){ ?>
				<p style="color:red;">Usuario o contraseña incorrecta</p>
		<?php } ?>
	</section>
	<?php include'pie.php' ?>
</body>
</html>