<?php 
include ('functions.php');
date_default_timezone_set('America/Lima');
$Nombres=$_GET['Nombres'];
$Direccion=$_GET['Direccion'];
$Coordenadas=$_GET['Coordenadas'];
$Empresa=$_GET['Empresa'];
$CeluEmpresa=$_GET['celuEmpresa'];
$Pedido=$_GET['Pedido'];
$PrecioTotal=$_GET['PrecioTotal'];
$Celular=$_GET['Celular'];
$Fecha=$_GET['Fecha'];
$Estado=$_GET['Estado'];
$metodoPago=$_GET['metodoPago'];
$hoy = date("H:i:s");
ejecutarSQLCommand("INSERT INTO  `pedidosuntoke` (Nombres,Direccion,Coordenadas,Empresa,celuEmpresa, Pedido, PrecioTotal, Celular, Fecha,hora_pedido, Estado, metodoPago)
VALUES (
'$Nombres',
'$Direccion',
'$Coordenadas',
'$Empresa',
'$CeluEmpresa',
'$Pedido',
'$PrecioTotal',
'$Celular',
'$Fecha','$hoy','$Estado','$metodoPago')
 ON DUPLICATE KEY UPDATE `Nombres`= '$Nombres',`Direccion`='$Direccion',`Coordenadas`='$Coordenadas',`Empresa`='$Empresa',`celuEmpresa`='$CeluEmpresa',`Pedido`='$Pedido',`PrecioTotal`='$PrecioTotal',`Celular`='$Celular',`Fecha`='$Fecha',`hora_pedido`='$hoy',`Estado`='$Estado',`metodoPago`='$metodoPago';");

 ?>