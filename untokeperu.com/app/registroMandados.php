<?php 
include ('functions.php');
$Nombre=$_GET['Nombre'];
$Direccion=$_GET['Direccion'];
$Celular=$_GET['Celular'];
$Mandado=$_GET['Mandado'];
$Fecha=$_GET['Fecha'];
$Estado=$_GET['Estado'];

ejecutarSQLCommand("INSERT INTO  `mandadosUntoke` (Nombre,Direccion, Celular, Mandado, Fecha, Estado)
VALUES (
'$Nombre',
'$Direccion',
'$Celular',
'$Mandado',
'$Fecha','$Estado')
 ON DUPLICATE KEY UPDATE `Nombre`= '$Nombre',`Direccion`='$Direccion',`Celular`='$Celular',`Mandado`='$Mandado',`Fecha`='$Fecha',`Estado`='$Estado';");

 ?>