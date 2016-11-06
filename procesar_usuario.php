<?php

	$usuario=$_POST['usuario'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$correo=$_POST['correo'];
	$uni=$_POST['universidad'];
	$pass=$_POST['pass'];
	$pass2=$_POST['pass2'];

	if($pass != $pass2){
		header('Location:registro_usuario.php');
	}else{
		$password=md5($pass);
		mysql_connect('localhost','root','') or die(mysql_error());
		mysql_select_db('finnder') or die(mysql_error());
		$query = "insert into usuarios(Correo,Usuario,Password,Nombre,Apellido,Universidad) values('$correo','$usuario','$password',$nombres','$pass','$apellidos', '$uni')";
		mysql_query($query);
		
		header('Location:resultado_usuario.php');
	}
	
	
?>