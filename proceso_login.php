<?php
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$password_enc = md5($password);

	$query="SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Password = '$password_enc'";

	$db = new PDO ('mysql:host=localhost;dbname=finnder','root','');
	$sentencia = $db->query($query);
	$usuarios_encontrados = $sentencia->rowCount();
	$fila=$sentencia->fetch();

	if($usuarios_encontrados == 0){
		header('Location: inicio_sesion.php?error=datosincorrectos');
	}else{
		session_start();
		$_SESSION['Nombre'] = $fila['Nombre'];
		header('Location: index.php');
	}
?>