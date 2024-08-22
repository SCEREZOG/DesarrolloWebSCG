<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$valorPar = [];
$valosImpar = [];
foreach ($numeros as $numero) {
  if ($numero % 2 == 0) {
    $valorPar[] = $numero;
  } else {
    $valorImpar[] = $numero;
  }
}

foreach ($valorPar as $data) {
  echo "Los numeros pares son : " . $data . "<br>";
}
echo "<br>";
foreach ($valorImpar as $data) {
  echo "Los numeros impares son:" . $data . "<br>";
}
