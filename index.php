<!Doctype html>
<html>
<head>
	<title>FINNDER</title>
	<link rel="stylesheet" href="estilos/estilo.css" type="text/css" media="all" />
</head>
<body>
	<section id="contenedor">
		<header>
			<aside id="iniciar">
				<a class="link" href="inicio_sesion.php"><span>Iniciar Sesión</span></a>
				<a class="link" href="registrarse.php"><span>Registrarme</span></a>
			</aside>
			<aside id="titulo">
				<img id="logo" src="logo/F_logo_w.png" height="180px" />
			</aside>
			<br/>
		</header>

		<div id="menu" class="sidenav">
  			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>			
			<a href="buscar_profesor.php"><img src="img/Contact_book_icon.png" width="30px" /><span>Profesores</span></a>
			<br/><br/>
			<a href="#"><img src="img/Star_icon.png" width="30px" /><span>Destacados</span></a>
			<br/><br/>
			<a href="#"><img src="img/User_icon.png" width="30px" /><span>Perfil</span></a>
			<br/><br/>
			<a href="#"><img src="img/Love_icon.png" width="30px"/><span>Favoritos</span></a>
			<br/><br/>
			<a href="#"><img src="img/Gear_icon.png" width="30px"/><span>Ajustes</span></a>
			<br/><br/>
		</div>
		<span id="abrir" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; menú</span>

	</section>
	<footer>
		<?php include 'pie.php' ?>	
	</footer>
	<script>
		function openNav() {
		    document.getElementById("menu").style.width = "20%";
		}

		function closeNav() {
		    document.getElementById("menu").style.width = "0";
		}
	</script>
</body>
</html>