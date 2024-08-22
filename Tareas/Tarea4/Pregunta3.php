<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <?php
$numeros= [3,6,8,3,9];
$min=10000;
$max=0;
foreach($numeros as $n){
  if($min > $n){
    $min = $n;
  }
  if($max < $n){
    $max = $n;
  }
}
?>
<div class="bg-red"><?php echo $min ?></div>
<div class="bg-red"><?php echo $max ?></div>
<?php

?>
</body>
</html>

