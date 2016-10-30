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
				<img id="logo" src="logo/F_logo.png" height="250px" />
			</aside>
			<aside id="iniciar">
			    //
				<a class="link" href="inicio_sesion.php"><span>Iniciar Sesion</span></a>
				<a class="link" href="registrarse.php"><span>Registrarme</span></a>
			</aside>
		</header>
		<aside>
			<a href="buscar_profesor.php"><p><img src="img/profesor_little.png"/>Profesores</p></a>
			<a><p><img src="img/star.png"/>Destacados</p></a>
			<a><p><img src="img/perfil.png"/>Perfil</p></a>
			<a><p><img src=""/>Favoritos</p></a>
			<a><p><img src=""/>Ajustes</p></a>
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
		<p id="copyright">&copy Nexus <?php echo $fecha?></p>
	</footer>
</body>
</html>
