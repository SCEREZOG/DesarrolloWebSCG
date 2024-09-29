<?php
$numerofilas = $_POST['numerofilas'];
$numerocolumnas = $_POST['numerocolumnas'];
$fila_bowser = $_POST['fila'];
$columna_bowser = $_POST['columna'];
$color = $_POST['color'];

if ($fila_bowser > $numerofilas || $columna_bowser > $numerocolumnas) {
  echo "La fila o columna de Bowser está fuera del rango del tablero.";
  exit();
}

?>

<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <title>Tablero de Ajedrez</title>
  <style>
    table {
      border-collapse: collapse;
    }

    td {
      width: 50px;
      height: 50px;
      text-align: center;
    }

    .blanco {
      background-color: #FFFFFF;
    }

    .color {
      background-color: <?php echo $color ?>;
    }

    .bowser {
      background-color: #FFC000;
    }
  </style>
</head>

<body>
  <h1>Tablero de Ajedrez</h1>
  <table border='1'>
    <?php
    // Generar el tablero
    for ($i = 1; $i <= $numerofilas; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= $numerocolumnas; $j++) {
        // Verificar si la posición actual es la de Bowser
        if ($i == $fila_bowser && $j == $columna_bowser) {
          echo "<td class='bowser'><img src='Bowser.png' alt='Bowser' width='40'></td>";
        } else {
          // Alternar colores del tablero
          $es_blanco = ($i + $j) % 2 == 1;
          echo "<td class='" . ($es_blanco ? "blanco" : "color") . "'></td>";
        }
      }
      echo "</tr>";
    } ?>

  </table>
</body>

</html>