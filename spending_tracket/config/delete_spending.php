<?php
require_once ('config.php');
$ID = $_GET['ID'];

$query = "DELETE FROM gastos WHERE ID = '$ID'";
$conexion->query($query);

header("location: ../modulos/gastos/index.php");
?>
