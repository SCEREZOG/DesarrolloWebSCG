<?php
session_start();
require_once 'operaciones.php'; // Incluye el archivo de la clase

// Procesamiento de formularios y sesiones
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['introducir'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $_SESSION['operacion'] = new Operaciones($a, $b, $c);
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

  <h2>Menú de Operaciones</h2>

  <form method="post">
    <button type="submit" name="mostrar_datos">Introducir Datos</button>
    <button type="submit" name="mostrar_calculos">Mostrar Cálculos</button>
  </form>

  <?php
  // Mostrar formulario para introducir datos
  if (isset($_POST['mostrar_datos'])) {
  ?>
    <form method="post">
      <label>Valor A:</label>
      <input type="number" name="a" required><br>
      <label>Valor B:</label>
      <input type="number" name="b" required><br>
      <label>Valor C:</label>
      <input type="number" name="c" required><br>
      <button type="submit" name="introducir">Guardar</button>
    </form>
  <?php
  }

  // Mostrar cálculos si los datos están en la sesión
  if (isset($_POST['mostrar_calculos']) && isset($_SESSION['operacion'])) {
    // Comprueba que la clase `Operaciones` está definida antes de usarla
    if (class_exists('Operaciones')) {
      $_SESSION['operacion']->MostrarCalculos();
    } else {
      echo "La clase Operaciones no está disponible.";
    }
  }
  ?>

</body>

</html>