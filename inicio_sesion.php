<?php $fecha = date('Y')?>
<!Doctype html>
<html>
<head>
	<title>Inicio Sesion</title>
	<link rel="stylesheet" href="estilos/estilo.css" />
	<link rel="stylesheet" href="estilos/estilos_listado.css">
	<link rel="stylesheet" href="estilos/estilos_reloj.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="estilos/mediaquery.css" />
	<script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script>
</head>
<body>
	<?php include 'cabecera.php' ?>
	<section id="inicio">
		<h1 id="h1inicio"> Inicio Sesion </h1>
		<form action="proceso_login.php" method="post">
			<label class="labelinicio">Usuario</label>
			<input type="text" id="usuario" name="usuario" class="txt-box-campos" placeholder="Ingresar usuario"/>
			<br/><br/>
			<label class="labelinicio">Contraseña</label>
			<input type="password" id="password" name="password" class="txt-box-campos" placeholder="Ingresar contraseña"/>
			<br/><br/>
			<input type="submit" value= "Iniciar Sesion"/>
		</form>
		<?php if(isset($_GET['error'])){ ?>
				<p style="color:red;">Usuario o contraseña incorrecta</p>
		<?php } ?>
	</section>
	
	<script type="text/javascript">	
		$(document).ready(function () {
			$("#usuario").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#usuario").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
            });
            $("#password").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#password").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
            });
        });
	</script>

	<script src="scripts/reloj.js"></script>
	<?php include'pie.php' ?>
</body>
</html>