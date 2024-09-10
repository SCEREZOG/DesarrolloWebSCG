<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operaciones</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <?php
  session_start();

  class Operaciones
  {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
      $this->a = $a;
      $this->b = $b;
      $this->c = $c;
    }

    public function CalcularSuma()
    {
      return $this->a + $this->b + $this->c;
    }

    public function CalcularMayor()
    {
      return max($this->a, $this->b, $this->c);
    }

    public function MostrarCalculos()
    {
      $suma = $this->CalcularSuma();
      $mayor = $this->CalcularMayor();
      echo '<table border="1">
                <tr>
                    <th>Valor A</th>
                    <th>Valor B</th>
                    <th>Valor C</th>
                </tr>
                <tr>
                    <td>' . $this->a . '</td>
                    <td>' . $this->b . '</td>
                    <td>' . $this->c . '</td>
                </tr>
                <tr>
                    <th>Suma</th>
                    <th>Mayor</th>
                    <td></td>
                </tr>
                <tr>
                    <td>' . $suma . '</td>
                    <td>' . $mayor . '</td>
                    <td></td>
                </tr>
            </table>';
    }
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $c = intval($_POST['c']);
    $_SESSION['operaciones'] = serialize(new Operaciones($a, $b, $c));
  }

  $option = isset($_GET['option']) ? intval($_GET['option']) : 0;

  if ($option == 1) {
  ?>
    <h1>Introducir Datos</h1>
    <form action="index.php?option=1" method="post">
      <label for="a">Valor A:</label>
      <input type="number" name="a" id="a" required>
      <br>
      <label for="b">Valor B:</label>
      <input type="number" name="b" id="b" required>
      <br>
      <label for="c">Valor C:</label>
      <input type="number" name="c" id="c" required>
      <br>
      <input type="submit" value="Guardar">
    </form>
  <?php
  } elseif ($option == 2) {
    // Mostrar tabla con los cálculos
    if (isset($_SESSION['operaciones'])) {
      $operaciones = unserialize($_SESSION['operaciones']);
      $operaciones->MostrarCalculos();
    } else {
      echo '<p>No se han introducido datos.</p>';
    }
  } else {
  ?>
    <h1>Menú de Operaciones</h1>
    <nav>
      <ul>
        <li><a href="index.php?option=1">Introducir Datos</a></li>
        <li><a href="index.php?option=2">Mostrar Cálculos</a></li>
      </ul>
    </nav>
  <?php
  }
  ?>
</body>

</html>