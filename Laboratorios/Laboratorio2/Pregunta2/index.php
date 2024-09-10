<?php
session_start();
require_once 'Operaciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['introducir'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $_SESSION['operacion'] = serialize(new Operaciones($a, $b, $c));
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Menú Operaciones</title>
</head>

<body>

  <form method="post">
    <input type="submit" name="mostrar_datos" value="introducir datos">
    <input type="submit" name="mostrar_calculos" value="mostrar calculos">
  </form><br>

  <?php
  if (isset($_POST['mostrar_datos'])) {
  ?>
    <form method="post">
      <label>Valor A:</label>
      <input type="number" name="a" required><br>
      <label>Valor B:</label>
      <input type="number" name="b" required><br>
      <label>Valor C:</label>
      <input type="number" name="c" required><br>
      <input type="submit" name="introducir" value="Guardar">
    </form>
  <?php
  }

  if (isset($_POST['mostrar_calculos']) && isset($_SESSION['operacion'])) {
    $operaciones = unserialize($_SESSION['operacion']);
    $operaciones->MostrarCalculos();
  }
  ?>

</body>

</html>