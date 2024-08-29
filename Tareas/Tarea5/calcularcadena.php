<?php
include('operacionescadena.php');
$cadena = $_GET['cadena'];
$valor = new OperacionesCadena($cadena);
echo "La cadena invertida es: " . $valor->invertir($cadena) . "<br>";
echo "La cadena en mayuscula es: " . $valor->mayuscula($cadena) . "<br>";
echo "La cadena en minuscula es: " . $valor->minuscula($cadena) . "<br>";
