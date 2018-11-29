<?php

require_once('conexion.php');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$fecha=$_POST['fecha'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$telefono=$_POST['telefono'];
$privilegio=$_POST['privilegio'];
$Empresa=$_POST['Empresa'];
$plan=$_POST['plan'];

//foto
$foto=$_FILES['foto']['name'];
$carpeta_destino = '../imagenesUsuario/';
$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

$nomRepet = $usuario;

 $q="SELECT * FROM usuario WHERE usuario = '$nomRepet'";
 $resulta = mysqli_query($conexion,$q);
 $numero = mysqli_num_rows($resulta);


if($numero == '0') {

$sql="INSERT INTO usuario(nombre,apellido,dni,direccion,ciudad,telefono,fecha,usuario,clave,foto,privilegio,Empresa,plan)
      VALUES ('$nombre','$apellido','$dni','$direccion','$ciudad','$telefono','$fecha','$usuario','$clave','$foto','$privilegio','$Empresa','$plan')";
 mysqli_query($conexion, $sql);
  header('Location: guardado');
}
    
 else {
  header('Location: existe');
  } 

?>


