<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=h1, initial-scale=1.0">
  <title>Document</title>
  <style>

  </style>
</head>
<body>
  <h1>Primer Ejercicio</h1>
  <p class="hola">
  <?php
  echo "Hola Mundo"
  ?>
  </p>
  <h2>Imprimir numero de 1 al 10 en una lista</h2>
  <ul>
    <?php
    for($i=0; $i<10; $i++){
      echo "<li>$i</li>";
    }
    ?>
  </ul>

  <h2>Imprimir numero de 1 al 10 en una lista con comillas simples</h2>
  <ul>
    <?php
    for($i=0; $i<10; $i++){
      echo "<li>'$i'</li>";
    }
    ?>
  </ul>

  
  <h2>Imprimir numero de 1 al 10 en una lista con codigo spaguetti</h2>
  <ul>
    <?php
    for($i=0; $i<10; $i++){
      ?>
      <li><?php echo $i?></li>
      <?php
    }
    ?>
  </ul>
</body>
</html>