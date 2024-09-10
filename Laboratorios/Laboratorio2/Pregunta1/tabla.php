<?php
$filas = $_POST['filas'];
$columnas = $_POST['columnas'];

?>
<table border="1"
  style="border-collapse: collapse;">
  <?php
  for ($i = $filas; $i > 0; $i--) {
    echo "<tr>";
    for ($x = $columnas; $x > 0; $x--) {
      echo "<td>" . ($i * $x) . "</td>";
    }
    echo "<td style='font-weight: bold; background-color: red'>$i</td>";
    echo "</tr>";
  }
  echo "</tr>";
  for ($x = $columnas; $x > 0; $x--) {
    echo "<td style='font-weight: bold; background-color: red;'>$x</td>";
  }

  echo "<td></td>";
  echo "</tr>";
  ?>

</table>