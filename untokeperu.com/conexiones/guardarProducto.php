<?php

include('conexion.php');

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$razonsocial=$_POST['razonsocial'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
//foto
$foto=$_FILES['foto']['name'];
$carpeta_destino = '../imagenesProducto/';
$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);


$sql="INSERT INTO producto(nombre,precio,ciudad,razonsocial,  telefono, foto)
      VALUES ('$nombre', '$precio','$ciudad','$razonsocial','$telefono','$foto')";

echo mysqli_query($conexion, $sql);

?>