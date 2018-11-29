<?php
require_once("conexiones/conexion.php");

$encontrados=0;
$user=$_POST['usuario'];
$clave=$_POST['clave'];
$codigo=0;
$nombre="";
$privilegio="";
$ruta="";

$sql="SELECT * FROM usuario";

$resultado=$conexion->query($sql);

while ($row=$resultado->fetch_array(MYSQLI_ASSOC))
{
	if ($row['usuario']==$user)
	{
    
		if ($row['clave']==$clave) 
		{

    			#encontro al usuario
          $encontrados=1;
          session_start();	#creamos una seccion
          $_SESSION['user'] =$row; #adjuntamos todo el registro correcto
                            #a la variable session
          Break;
		}else
		{
			$encontrado=0;
		}

	}else{
          $encontrados=0;
	}
}

if ($encontrados)
{
	 $ruta="Location: Cpanel-General/ReportePedidos"; //cuando existe el usuario 	
	  header($ruta);
		  	  
// registramos acceso
require('auditoria/funciones_empresa.php');
$dia = date("Y-m-d");  // capturamos el dia del instante de tiempo
$hoy = date("H:i:s"); // capturamos la hora del instante de tiempo
$respuestas=registrarInicioSesion($conexion,$row['usuario'],$dia,$hoy,0);

///////////////////////////////////////////////////////////
$sql="UPDATE usuario SET estado='conectado' WHERE usuario='$user' ";
$resulta=mysqli_query($conexion,$sql)or die(mysqli_error($conexion));
	
}else{

 	header('Location: http://untokeperu.com/'); //cuando no existe el usuario
}



?>
