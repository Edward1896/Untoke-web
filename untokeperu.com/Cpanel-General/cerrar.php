<?php
session_start();
require_once('conexion.php');
if(isset($_SESSION['user']))
{
#El usuario accedio correctamente
$nombre =$_SESSION['user']['usuario'];
$empresa = $_SESSION['user']['Empresa'];

}

session_start();
session_destroy();
header('Location: http://untokeperu.com/');




?>

<?php

// registramos el cierre de session
require_once('../auditoria/funciones_empresa.php');
$dia = date("Y-m-d");  // capturamos el dia del instante de tiempo
$hora = date("H:i:s"); // capturamos la hora del instante de tiempo
$codigo =$_SESSION['user']['usuario']; // codigo del usuario actual
$respuestas=registrarCerrarSesion($conexion,$codigo,$dia,0,$hora);


///////////////////////////////////////
$sql="UPDATE usuario SET estado='desconectado' WHERE  usuario ='$nombre'";
$result=mysqli_query($conexion,$sql);

?>