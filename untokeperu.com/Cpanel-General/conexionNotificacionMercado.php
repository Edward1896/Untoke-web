<?php
session_start();
include('conexion.php');
if(isset($_SESSION['user']))
{
#El usuario accedio correctamente
$nombre =$_SESSION['user']['usuario'];
$privilegio = $_SESSION['user']['privilegio'];
$EMPRESA = $_SESSION['user']['Empresa'];
$celular = $_SESSION['user']['telefono'];
}
 ?>

<?php

switch ($privilegio) {

	case 'Administrador':
		$sql = "UPDATE pedidosMercado SET noti_admin = 1 WHERE noti_admin = 0";	
		break;
	
}

$result = mysqli_query($conexion, $sql);

if(!empty($response)) {
	print $response;
}

?>