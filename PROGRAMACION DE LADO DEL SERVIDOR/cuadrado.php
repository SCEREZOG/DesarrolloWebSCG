<?php
$cadena = $_GET['cadena'];
?>

<div style="margin: auto; width: 200px;">


  <?php
  $cadena = "sistemas";
  $longitud = strlen($cadena);
  echo strtoupper($cadena) . "<br>";

  for ($i = 1; $i < $longitud - 1; $i++) {
    echo substr(strtoupper($cadena), $i, 1);
    for ($j = 1; $j < $longitud; $j++) {
      echo "&nbsp;&nbsp;";
    }
    echo substr(strtoupper($cadena), $longitud - $i - 1, 1) . "<br>";
  }

  for ($x = 1; $x <= $longitud; $x++) {
    echo substr(strtoupper($cadena), $longitud - $x, 1);
  }
  ?>

</div>