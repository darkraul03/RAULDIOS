<!Doctype html>
<html>
<head>
	<title>FINNDER</title>
	<link rel="stylesheet" href="estilos/estilo.css" type="text/css" media="all" />
	<style>
		header {
			background-color: rgba(0, 0, 0,0.3);
			border: none;
		}
	</style>
</head>
<body>
	<section id="contenedor">
		<?php include 'cabecera.php' ?>

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