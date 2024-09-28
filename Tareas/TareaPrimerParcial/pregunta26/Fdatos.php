<?php
include "conexion.php";
$sql = "SELECT codigo_carrera,carrera FROM carreras";


$alumnos = $_POST['alumnos'];
$carreras = [];

$resultado = $con->query($sql);
while ($row = $resultado->fetch_assoc()) {
  $carreras[] = $row;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="Alumnos.php" method="post">
    <span>$cadena</span>
    <label for="">Nombres:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Apellidos:&nbsp;&nbsp; &nbsp; Cu:&nbsp; &nbsp;Sexo: &nbsp;&nbsp;&nbsp;&nbsp;Carrera:</label><br>
    <?php

    for ($i = 0; $i < $alumnos; $i++) { ?>
      <input type="text" name="alumnos[<?php echo $i ?>][Nombres]">
      <input type="text" name="alumnos[<?php echo $i ?>][Apellidos]">
      <input type="text" name="alumnos[<?php echo $i ?>][CU]">
      <input type="radio" name="alumnos[<?php echo $i ?>][Sexo]" value="M">
      <input type="radio" name="alumnos[<?php echo $i ?>][Sexo]" value="F">
      <select name="alumnos[<?php echo $i ?>][codigo_carrera]">
        <?php
        foreach ($carreras as $carrera) {
          echo "<option value='" . $carrera['codigo_carrera'] . "'>" . $carrera['carrera'] . "</option>";
        }
        ?>
      </select><br>
    <?php
    }
    ?>
    <input type="submit" value="Insertar">
    <input type="reset" value="Borrar" id="">
  </form>
</body>

</html>