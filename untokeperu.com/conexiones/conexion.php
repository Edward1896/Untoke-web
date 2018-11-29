<?php

$server="pdb9.runhosting.com";
$user="2468512_odlsoft";
$password="miranda2018";
$bd="2468512_odlsoft";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	if($conexion->connect_error)
{
  die("ERROR EN CONEXION: ".$conexion->connect_error);
}


?>