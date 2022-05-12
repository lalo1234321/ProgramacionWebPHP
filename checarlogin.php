<?php
include_once '../pruebas/conexion.php';

$sql='SELECT * FROM usuarios';//haces una busqueda de lo que hay en la tabla
$resultado=$conexion->query($sql);
?>