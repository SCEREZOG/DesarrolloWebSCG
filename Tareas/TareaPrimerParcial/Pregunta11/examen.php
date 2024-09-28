<?php

class Examen
{
  private $cadena1;
  private $cadena2;

  public function __construct($cadena1, $cadena2)
  {
    $this->cadena1 = $cadena1;
    $this->cadena2 = $cadena2;
  }

  public function cruzar()
  {
    $encontro = false;
    $auxi = -1;
    $auxj = -1;

    for ($i = 0; $i < strlen($this->cadena1); $i++) {
      for ($j = 0; $j < strlen($this->cadena2); $j++) {
        if ($this->cadena1[$i] == $this->cadena2[$j]) {
          $encontro = true;
          $auxi = $i;
          $auxj = $j;
          break 2;
        }
      }
    }

    echo $this->cadena1 . "<br>";
    echo $this->cadena2 . "<br>";

    if ($encontro) {
      echo "cadena1 en su posición $auxi coincide con cadena2 en su posición $auxj<br>";
    } else {
      echo "No existen letras comunes<br>";
      return;
    }
?>
    <table style="border-collapse: collapse; border: 1px solid black;">
      <?php
      for ($i = 0; $i < strlen($this->cadena1); $i++) {
        echo "<tr>";

        for ($j = 0; $j < strlen($this->cadena2); $j++) {
          echo '<td class="celda" style="border: 1px solid black; padding: 5px;">';

          if ($i == $auxi && $j == $auxj) {
            echo '<span style="background-color:blue; color:white;">' . $this->cadena2[$j] . '</span>';
          } elseif ($i == $auxi) {
            echo $this->cadena1[$i];
          } elseif ($j == $auxj) {
            echo $this->cadena2[$j];
          } else {
            echo '&nbsp;';
          }

          echo '</td>';
        }

        echo "</tr>";
      }
      ?>
    </table>
<?php
  }
}
