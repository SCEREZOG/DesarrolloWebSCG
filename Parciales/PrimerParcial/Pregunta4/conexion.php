<?php
$conexion = new mysqli('localhost', 'root', '', 'bd_banco');
if ($conexion->connect_error) {
  die("Conexión fallida: " . $conexion->connect_error);
}
