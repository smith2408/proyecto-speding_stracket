<?php
require_once ('config.php');
$CANTIDAD = $_POST['CANTIDAD'];
$CATEGORIA = $_POST['CATEGORIA'];
$DESCRIPCION = $_POST['DESCRIPCION'];

$query = "INSERT INTO gastos (CANTIDAD, CATEGORIA, DESCRIPCION) VALUES ('$CANTIDAD', '$CATEGORIA', '$DESCRIPCION')";
$conexion->query($query);

header("location: ../index.php");
?>
