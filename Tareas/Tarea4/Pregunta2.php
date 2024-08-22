<?php
$numeros = [2, 3, 45, 32, 2, 1, 63, 21, 52, 242, 22, 1];
for ($i = 0; $i < count($numeros) - 1; $i++) {
  for ($j = 0; $j < count($numeros) - 1 - $i; $j++) {
    if ($numeros[$j] > $numeros[$j + 1]) {
      $temporal = $numeros[$j];
      $numeros[$j] = $numeros[$j + 1];
      $numeros[$j + 1] = $temporal;
    }
  }
}

echo "Arreglo ordenado: ";
for ($k = 0; $k < count($numeros); $k++) {
  echo $numeros[$k] . "  ";
}
