<?php

	$usuario=$_POST["usuario"];
	$nombres=$_POST["nombres"];
	$apellidos=$_POST["apellidos"];
	$correo=$_POST["correo"];
	$uni=$_POST["universidad"];
	$pass=$_POST["pass"];
	$pass2=$_POST["pass2"];

	if($pass == $pass2){
		$password = md5($pass);

		mysql_connect('localhost','root','') or die(mysql_error());

		mysql_select_db('finnder') or die(mysql_error());

		$resultado = mysql_query("SELECT * FROM usuarios") or die(mysql_error());

		$sql = mysql_query("INSERT INTO usuarios(Correo, Usuario, Password, Nombre, Apellido, Universidad)  VALUES ('$correo','$usuario','$password','$nombres','$apellidos','$uni')") or die(mysql_error());
		
		header('Location:resultado_usuario.php');
	}else{
		header('Location:registro_usuario.php?error=incorrect');
	}

	

	
	
?>