<?php
session_start();
include 'Operaciones.php';
$a = $_SESSION['a'];
$b = $_SESSION['b'];
$c = $_SESSION['c'];

$operacion = new Operaciones($a, $b, $c);

$resultado = "";

if (isset($_POST['operacion'])) {
  switch ($_POST['operacion']) {
    case 'sumar':
      $resultado = $operacion->sumar();
      break;
    case 'restar':
      $resultado = $operacion->restar();
      break;
    case 'multiplicar':
      $resultado = $operacion->multiplicar();
      break;
    case 'dividir':
      $resultado = $operacion->dividir();
      break;
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado</title>
</head>

<body>
  <form>
    <p>El resultado de <b><?= $_POST['operacion'] ?></b> : <br> a = <?= $a ?>, b = <?= $b ?>, c = <?= $c ?> es: <b><i><?= $resultado ?></i></b></p>
  </form>

</body>

</html>