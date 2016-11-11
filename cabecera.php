<header>
	<aside id="iniciar">
		<?php if (isset($_SESSION['Nombre'])){ ?>
			<a class="link" href="cerrar_sesion.php">Cerrar Sesion</a>
			<a class="link" href="index.php"><span><?php echo $_SESSION['Nombre'] ?></span></a>
		<?php }else{ ?>
			<a class="link" href="index.php">Inicio</a>
			<a class="link" href="inicio_sesion.php"><span>Iniciar Sesión</span></a>
			<a class="link" href="registro_usuario.php"><span>Registrarme</span></a>
		<?php } ?>
	</aside>
	<aside id="titulo">
		<a href="index.php"><img id="logo" src="logo/F_logo_w.png" height="180px" /></a>
	</aside>
	<br/>
	<!--<div class="wrap" style="float: right;">
		<div class="widget" >
			<div class="fecha">
				<p id="diaSemana" class="diaSemana" ></p>
				<p id="dia" class="dia" ></p>
				<p>de </p>
				<p id="mes" class="mes"></p>
				<p>del </p>
				<p id="year" class="year"></p>
			</div>

			<div class="reloj">
				<p id="horas" class="horas"></p>
				<p>:</p>
				<p id="minutos" class="minutos"></p>
				<p>:</p>
				<div class="caja-segundos">
					<p id="ampm" class="ampm"></p>
					<p id="segundos" class="segundos"></p>
				</div>
			</div>
		</div>
	</div>-->
	
</header>