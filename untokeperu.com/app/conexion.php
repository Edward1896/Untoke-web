<?php

$server="pdb9.runhosting.com";
$user="2468512_odlsoft";
$password="miranda2018";
$bd="2468512_odlsoft";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());	
	}	

?>