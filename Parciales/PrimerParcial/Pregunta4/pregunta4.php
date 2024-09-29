<?php

include 'conexion.php';
// Obtener el criterio de ORDEN si se ha seleccionado una columna, NOMBRES, APELLIDOS, CORREO de la tabla
if (isset($_GET['orden'])) {
  $orden = $_GET['orden'];
} else {
  $orden = 'id';
}

if (isset($_POST['actualizar'])) {
  // si se ha enviado el formulario de editar correo se actualiza el correo
  // de form_editar_correo.php
  $id = $_POST['id'];
  $correo = $_POST['correo'];
  $sql = "UPDATE usuarios SET correo = '$correo' WHERE id = $id";
  $conexion->query($sql);
  header('Location: pregunta4.php');
  exit();
}
// Obtener los usuarios ordenados por la columna seleccionada
$sql = "SELECT * FROM usuarios ORDER BY $orden";
$result = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Usuarios</title>
  <style>
    .container {
      width: 80%;
      margin: 0 auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th {
      background-color: red;
    }

    th a {
      color: white;
    }

    tr:nth-child(odd) {
      /* Esto para colorear las filas pares. con ODD */
      background-color: yellow;
    }

    td {
      padding: 8px;
      text-align: left;
    }
  </style>
</head>

<body>
  <div class="container">
    <table border="1">
      <tr>
        <!-- cuando se de click en cada uno se actualizara la pagina y se ORDENARA segun donde se haya hecho click -->
        <th><a href="pregunta4.php?orden=nombres">Nombres</a></th>
        <th><a href="pregunta4.php?orden=apellidos">Apellidos</a></th>
        <th><a href="pregunta4.php?orden=correo">Correo</a></th>
      </tr>
      <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['nombres'] ?></td>
          <td><?= $row['apellidos'] ?></td>
          <td><a href="form_editar_correp.php?id=<?= $row['id'] ?>"><?= $row['correo'] ?></a></td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>

</body>

</html>