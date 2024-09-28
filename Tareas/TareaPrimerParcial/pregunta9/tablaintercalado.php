<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .rojo {
    background-color: red;
  }

  .amarillo {
    background-color: yellow;
  }

  .verde {
    background-color: green;
  }
</style>

<body>

</body>

</html>

<?php

$filas = $_POST['filas'];
$columnas = $_POST['columnas'];
$clase = "";

?>
<table style="border-collapse:collapse; border:1px solid black">
  <?php
  for ($i = 1; $i <= $filas; $i++) {
    if ($i % 3 == 1) {
      $clase = "rojo";
    }
    if ($i % 3 == 2) {
      $clase = "amarillo";
    }
    if ($i % 3 == 0) {
      $clase = "verde";
    }
    echo "<tr class='$clase'>";

    for ($j = 1; $j <= $columnas; $j++) {
      echo "<td style='border:1px solid black; width:100px; height:50px;'></td>";
    }
    echo "</tr>";
  }
  ?>
</table>