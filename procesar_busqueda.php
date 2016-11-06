<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	mysql_connect('localhost', 'root','') or die(mysql_error());
	
	mysql_select_db('finnder') or die(mysql_error());

	$request = mysql_query("SELECT * FROM ")
?>