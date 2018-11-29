<?php
include('conexion.php');
$telefono=$_GET["telefono"];


ejecutarSQLCommand("SELECT * FROM `usuario` WHERE telefono='$telefono'")


?>