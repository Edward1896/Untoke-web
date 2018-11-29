<?php

require_once('conexion.php');

$Nombres=$_POST['Nombres'];
$Pedido=$_POST['Pedido'];
$PrecioTotal=$_POST['PrecioTotal'];
$Empresa=$_POST['Empresa'];
$Celular=$_POST['Celular'];
$Direccion=$_POST['Direccion'];
$Coordenadas=$_POST['Coordenadas'];
$Empresa=$_POST['Empresa'];
$Celular=$_POST['Celular'];
$Fecha=$_POST['Fecha'];
$Estado=$_POST['Estado'];
$hola=$_POST['hola'];

$sql="INSERT INTO PedidosUntoke(Nombres,Direccion,Coordenadas,Empresa,Pedido,PrecioTotal,Celular,Fecha,Estado,hola)
      VALUES ('$Nombres','$Direccion','$Coordenadas','$Empresa','$Pedido','$PrecioTotal','$Celular','$Fecha','$Estado','$hola')";

echo mysqli_query($conexion, $sql);

?>