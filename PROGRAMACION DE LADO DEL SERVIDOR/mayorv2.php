<?php
$mayor = ($_POST['n'][0]);
foreach ($_POST['n'] as $n) {
  if ($valor > $mayor) {
    $mayor = $valor;
  }
}
echo "<div> El mayor es $mayor </div>";
