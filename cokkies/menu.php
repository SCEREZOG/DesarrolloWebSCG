<?php
$a = $_POST['a'];
$b = $_POST['b'];
setcookie('a', $a, 0);
setcookie('b', $b, 0);
?>

<ul>
  <li><a href="resultado.php?operacion=suma">Suma</a></li>
  <li><a href="resultado.php?operacion=resta">Resta</a></li>
  <li><a href="resultado.php?operacion=multiplicacion">Multiplicacion</a></li>
</ul>