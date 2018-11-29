<?php

require_once('conexion.php');

$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$actividad=$_POST['actividad'];
$categoria=$_POST['categoria'];
$atencion=$_POST['atencion'];
$abre=$_POST['abre'];
$cierra=$_POST['cierra'];
$ciudad=$_POST['ciudad'];
$fecha=$_POST['fecha'];
$ate=$atencion."-".$abre."-".$cierra;
//foto
$foto=$_FILES['foto']['name'];
$carpeta_destino = '../imagenesUntoke/';
$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

$nomRepet = $nombre;

 $q="SELECT * FROM RegistroEmpresa WHERE nombre = '$nomRepet'";
 $resulta = mysqli_query($conexion,$q);
 $numero = mysqli_num_rows($resulta);


if($numero == '0') {

$sql="INSERT INTO RegistroEmpresa(nombre, direccion, telefono, actividad,categoria, ciudad, fecha ,atencion, foto)
VALUES ('$nombre','$direccion','$telefono','$actividad','$categoria','$ciudad','$fecha','$ate','$foto')";
 mysqli_query($conexion, $sql);
    
  header('Location: guardadoCorrecto');
 
}
    

 else {
    
  header('Location: usuarioexiste');
    
  } 

  
?>