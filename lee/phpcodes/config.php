<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "kamotequiz";
	
	$con = mysql_connect($host,$user,$password) or die(mysql_error());
	mysql_select_db($db);
?>