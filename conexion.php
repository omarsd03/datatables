<?php

	$server = "localhost";
	$user = "root";
	$password = "omar";//poner tu propia contraseña, si tienes una.
	$bd = "datatables";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());
	}	
?>

