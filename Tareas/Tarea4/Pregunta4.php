<?php
$filas = 5;
$columnas = 5;
$pint1 = $filas;
$pint1 = $columnas;

for ($i = 1; $i <= $filas; $i++) {
  echo "<div style='display:flex;'>";

  for ($x = 1; $x <= $columnas; $x++) {
    if (($i + $x) % 2 == 0) {
      echo "<div style='background-color: black; width: 50px;height:50px; border:1px solid black'></div>";
    } else {
      echo "<div style='background-color:white; width: 50px;height:50px; border:1px solid black'></div>";
    }
  }
  echo "</div>";
}
