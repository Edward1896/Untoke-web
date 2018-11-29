<?php

include("conexion.php");

	$sql = "SELECT * FROM RegistroEmpresa";
	$resultado = mysqli_query($conexion, $sql);
if ( !$resultado){
	die("Error");
	}else{
		while ($data = mysqli_fetch_assoc($resultado)) {
			$arreglo["data"][]= $data;
		}
		echo json_encode($arreglo);
	}

	mysqli_free_result($resultado);
    mysqli_close($conexion);
    
?>