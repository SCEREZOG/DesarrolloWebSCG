<?php
include 'conexion.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$anio = $_POST['anio'];
$usuario = $_POST['usuario'];
$carrera = $_POST['carrera'];

$fotografia = null;
if (isset($_FILES['imagen'])) {
  $archivo_original = $_FILES['imagen']['name'];
  $arreglo = explode(".", $archivo_original);
  $extension = $arreglo[1];
  $fotografia = uniqid() . '.' . $extension;
}
copy($_FILES['imagen']['tmp_name'], 'images/' . $fotografia);

$query = "INSERT INTO libros (titulo, autor, ideditorial, anio, idusuario, idcarrera, imagen) 
              VALUES ('$titulo', '$autor', $editorial, $anio, $usuario, $carrera, '$fotografia')";

if ($conn->query($query)) {
  echo "success";
} else {
  echo "error";
}
