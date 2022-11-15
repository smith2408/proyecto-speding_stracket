<?php
require_once('config.php');
$email= $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios  WHERE CORREO = '$email' AND PASSWORD = '$password' AND status = 1";
$result = $conexion->query($query);

if($result->num_rows > 0){
    header("location: ../bienvenida.php");
}else{
    header("location: ../index.php");
}
?>