<?php

require_once('conexion.php');

$nombre=$_POST['nombre'];
$ruc=$_POST['ruc'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$descripcion=$_POST['descripcion'];
//foto
$foto=$_FILES['foto']['tmp_name'];
$imgContent = addslashes(file_get_contents($foto));


$nomRepet = $nombre;

 $q="SELECT * FROM RegistroServicio WHERE nombre = '$nomRepet'";
 $resulta = mysqli_query($conexion,$q);
 $numero = mysqli_num_rows($resulta);

if($numero == '0') {

$sql="INSERT INTO RegistroServicio(nombre, ruc, ciudad, telefono, descripcion,foto)
VALUES ('$nombre','$ruc','$ciudad','$telefono','$descripcion','$imgContent')";
 mysqli_query($conexion, $sql);
    
  header('Location: guardadoCorrecto');
 
}
    
 else {
    
    header('Location: usuarioexiste');
    
    } 


?>