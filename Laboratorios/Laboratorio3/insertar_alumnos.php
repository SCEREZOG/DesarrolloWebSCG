<?php
include('conexion.php');

for ($i = 1; $i <= 4; $i++) {
  $fotografia = $_FILES["fotografia$i"]['name'];
  $nombres = $_POST["nombres$i"];
  $apellidos = $_POST["apellidos$i"];
  $cu = $_POST["cu$i"];
  $sexo = $_POST["sexo$i"];
  $carrera_id = $_POST["carrera$i"];

  if (!empty($fotografia)) {
    $arreglo = explode(".", $fotografia);
    $extension = $arreglo[1];
    $nombre_fotografia = uniqid() . '.' . $extension;
    copy($_FILES["fotografia$i"]['tmp_name'], 'Imagenes/' . $nombre_fotografia);
  }

  $sql = "INSERT INTO alumnos (fotografia, nombres, apellidos, cu, sexo, codigo_carrera) 
            VALUES ('$fotografia', '$nombres', '$apellidos', '$cu', '$sexo', $carrera_id)";

  if ($con->query($sql) === TRUE) {
    echo "Registro $i insertado correctamente.<br>";
  } else {
    echo "Error en el registro $i: " . $con->error . "<br>";
  }
}

$con->close();
