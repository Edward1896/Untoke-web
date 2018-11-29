<?php 
include ('functions.php');
date_default_timezone_set('America/Lima');
$nombres=$_GET['nombres'];
$direccion=$_GET['direccion'];
$coordenadas=$_GET['coordenadas'];
$empresa=$_GET['empresa'];
$pedido=$_GET['pedido'];
$precioTotal=$_GET['precioTotal'];
$celular=$_GET['celular'];
$fechaPedido=$_GET['fechaPedido'];
$fechaEntrega=$_GET['fechaEntrega'];
$estado=$_GET['estado'];
$metodoPago=$_GET['metodoPago'];
ejecutarSQLCommand("INSERT INTO  `pedidosMercado` (nombres,direccion,coordenadas,empresa, pedido, precioTotal, celular, fechaPedido, fechaEntrega, estado, metodoPago)
VALUES (
'$nombres',
'$direccion',
'$coordenadas',
'$empresa',
'$pedido',
'$precioTotal',
'$celular',
'$fechaPedido','$fechaEntrega','$estado','$metodoPago')
 ON DUPLICATE KEY UPDATE `nombres`= '$nombres',`direccion`='$direccion',`coordenadas`='$coordenadas',`empresa`='$empresa',`pedido`='$pedido',`precioTotal`='$precioTotal',`celular`='$celular',`fechaPedido`='$fechaPedido',`fechaEntrega`='$fechaEntrega',`estado`='$estado',`metodoPago`='$metodoPago';");

 ?> 