<?php
include('conexion.php');

$carreras = [];
$resultado = $con->query("SELECT codigo, carrera FROM carreras");
while ($row = $resultado->fetch_assoc()) {
  $carreras[] = $row;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Alumnos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
    }
  </style>
</head>

<body>
  <form action="insertar_alumnos.php" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <th></th>
        <th>Fotografía</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>CU</th>
        <th>Sexo</th>
        <th>Carrera</th>
      </tr>

      <?php for ($i = 1; $i <= 4; $i++) { ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><input type="file" name="fotografia<?php echo $i; ?>"></td>
          <td><input type="text" name="nombres<?php echo $i; ?>"></td>
          <td><input type="text" name="apellidos<?php echo $i; ?>"></td>
          <td><input type="number" name="cu<?php echo $i; ?>"></td>
          <td>
            <input type="radio" name="sexo<?php echo $i; ?>" value="M"> Masculino
            <input type="radio" name="sexo<?php echo $i; ?>" value="F"> Femenino
          </td>
          <td>
            <select name="carrera<?php echo $i; ?>">
              <?php foreach ($carreras as $carrera) { ?>
                <option value="<?php echo $carrera['codigo']; ?>">
                  <?php echo $carrera['carrera']; ?>
                </option>
              <?php } ?>
            </select>
          </td>
        </tr>
      <?php } ?>
    </table>

    <input type="submit" value="Insertar">
  </form>
</body>

</html>