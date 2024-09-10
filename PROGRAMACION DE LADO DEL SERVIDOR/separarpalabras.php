<?php
$oracion = "esta es una oracion";
?>
<ul>
  <?php
  $separar = explode(" ", $oracion);
  foreach ($separar as $palabra) {
  ?>
    <li><?php echo $palabra  ?></li>
  <?php
  }
  ?>
</ul>
<?php

$invertido = "";
for ($i = 0; $i < strlen($oracion); $i++) {
  $invertido = substr($oracion, $i, 1) . $invertido;
}
echo $invertido, "<br>";
$separar = explode(" ", $invertido);
echo implode("-", $separar);
