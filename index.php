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
		<section>
			<span>Contactanos</span>
			<span>Soporte</span>
			<span>Ayuda</span>
			<span>Politica de Privacidad</span>
			<span>Terminos de Uso</span>
		</section>
		<section id="social">
			<img src="img/fbook_little.jpg"/>
			<img src="img/youtube_little_pag.jpg"/>
			<img src="img/twitter_little_pag.jpg"/>
			<img src="img/linkdin_little_pag.jpg"/>
		</section>
		<p>&copy; <? echo $fecha ?></p>
	</footer>
</body>
</html>