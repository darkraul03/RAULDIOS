<?php
	$nombre=$_POST['Nombre'];
	$puntaje=$_POST['puntaje'];
	
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_Select_db('finnder') or die(mysql_error());
	$query = "UPDATE profe set puntaje = '$puntaje' WHERE Nombre='$nombre'";
	mysql_query($query);
	
	header('Location:resultado_puntaje.php');
?>