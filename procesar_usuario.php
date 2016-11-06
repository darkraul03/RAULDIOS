<?php

	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$correo=$_POST['correo'];
	$pass=$_POST['pass'];
	$pass2=$_POST['pass2'];
	
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('bd_finnder') or die(mysql_error());
	$query = "insert into tb_usuario(nombres,apellidos,correo,pass,pass2) values('$nombres','$apellidos','$correo','$pass','$pass2')";
	mysql_query($query);
	
	header('Location:resultado_usuario1.php');
?>