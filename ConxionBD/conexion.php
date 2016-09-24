<?php
	function conectar()
	{
		$user="Gabriela";
		$pass="Gaby";
		$server="localhost";
		$db="BD";
		$con=mysql_connect($server,$user,$pass)or die("Error a conectar a la bd".mysql_error());
		mysql_select_db($db,$con);
		return 1;
	}
?>