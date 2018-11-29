<?php

#establecer conexion
date_default_timezone_set("America/Lima");
$codUser=0;
$fecha=0;
$hora_inicial=0;
$hora_final=0;
$tipo_transaccion=0;
$CodEmpre=$empresa;
#########################################################################################################


function registrarInicioSesion($conexion,$cod,$fecha_I,$hora_i,$hora_f)
{
    $codUser=$cod;
    $fecha=$fecha_I;
    $hora_inicial=$hora_i;
    $hora_final='00:00:00';
    $tipo_transaccion="Inicio";
    $sql="INSERT INTO incidencias_empresa(codigo,fecha,hora_inicio,hora_final,tipo_transaccion) VALUES ('$codUser','$fecha','$hora_inicial','$hora_final','$tipo_transaccion')";
    return $conexion->query($sql);
}




  function registrarCerrarSesion($conexion,$cod,$fecha_I,$hora_i,$hora_f){
    $codUser=$cod;
    $fecha=$fecha_I;
    $hora_inicial='00:00:00';
    $hora_final=$hora_f;
    $tipo_transaccion="Cerrar";
  
    $sql="INSERT INTO incidencias_empresa(codigo,fecha,hora_inicio,hora_final,tipo_transaccion) VALUES ('$codUser','$fecha','$hora_inicial','$hora_final','$tipo_transaccion')";
  //$sql = "UPDATE incidencias_empresas SET codigo='$codUser',fecha='$fecha', hora_inicio='$hora_inicial', hora_final='$hora_final', tipo_transaccion'$tipo_transaccion' WHERE ID = 17";

    return $conexion->query($sql);
  }



?>