<?php
$a = $_COOKIE['a'];
$b = $_COOKIE['b'];

$op = $_GET['operacion'];

switch ($op) {
  case 'suma':
    $resultado = $a + $b;
    break;
  case 'resta':
    $resultado = $a - $b;
    break;
  case 'multiplicacion':
    $resultado = $a * $b;
    break;
}

echo $resultado;
