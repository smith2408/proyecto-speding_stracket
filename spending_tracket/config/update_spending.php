<?php
require_once ('config.php');
$CANTIDAD = $_POST['CANTIDAD'];
$CATEGORIA = $_POST['CATEGORIA'];
$DESCRIPCION = $_POST['DESCRIPCION'];
$ID = $_POST['ID'];

$query = "UPDATE gastos set CANTIDAD = '$CANTIDAD', CATEGORIA = '$CATEGORIA', DESCRIPCION = '$DESCRIPCION' WHERE ID = '$ID'  ";
$conexion->query($query);

header("location: ../index.php");
?>
