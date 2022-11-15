<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "spending_tracket";

$conexion = new mysqli($host, $user, $password, $db);
if($conexion->connect_errno){
    echo "fallo la conexion a la base de datos " . $conexion ->connect_error;
}
?>