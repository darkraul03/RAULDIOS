
<?php $fecha = date('Y')?>
<!Doctype html>
<html>
<head>
	<title>FINNDER</title>
	<link rel="stylesheet" href="estilos/estilo.css" type="text/css" media="all" />
</head>
<body>
	<section id="contenedor">
		<header>
			<aside id="titulo">
				<img src="logo/F_logo.png" height="250px" />
			</aside>
			<aside id="iniciar">
				<a class="link" href="inicio_sesion.php"><span>Iniciar Sesion</span></a>
				<a class="link" href="registrarse.php"><span>Registrarse</span></a>
			</aside>
		</header>
		<aside>
			<p><img src=""/>Profesores</p>
			<p><img src=""/>Destacados</p>
			<p><img src=""/>Perfil</p>
			<p><img src=""/>Favoritos</p>
			<p><img src=""/>Ajustes</p>
		</aside>
		<section>
			
		</section>
	</section>
	<footer>
		<section id="servicios">
			<span>Contactanos</span>
			<br/>
			<span>Soporte</span>
			<br/>
			<span>Ayuda</span>
			<br/>
			<span>Politica de Privacidad</span>
			<br/>
			<span>Terminos de Uso</span>
			<br/>
		</section>
		<section id="social">
			<a href="http://www.facebook.com"><img src="img/fbook_little.jpg"/></a>
			<a href="http://www.youtube.com"><img src="img/youtube_little_pag.jpg"/></a>
			<a href="http://www.twitter.com"><img src="img/twitter_little_pag.jpg"/></a>
			<a href="http://www.linkdin.com"><img src="img/linkdin_little_pag.jpg"/></a>
		</section>
		<p>&copy; <?php echo $fecha ?></p>
	</footer>
</body>
</html>