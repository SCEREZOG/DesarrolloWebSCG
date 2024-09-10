<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .grande {
      font-size: 32px;
      background-color: yellow;
      margin: 0 auto;
      border: 1px solid black;
      width: 200px;
    }

    .mediano {
      font-size: 24px;
      background-color: blue;
      margin: 0 auto;
      border: 1px solid black;
      width: 200px;
    }

    .pequeño {
      font-size: 12px;
      background-color: green;
      margin: 0 auto;
      border: 1px solid black;
      width: 200px;
    }
  </style>
</head>

<body>
  <div class="<?php echo $_GET['letras']; ?>">
    Programacion Web
  </div>
</body>



</html>