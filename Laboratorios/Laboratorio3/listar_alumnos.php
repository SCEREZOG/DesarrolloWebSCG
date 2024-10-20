<?php
include('conexion.php');

// Obtener el campo de orden de la URL, si no se especifica, ordenar por 'nombres'
$order_by = isset($_GET['order_by']) ? $_GET['order_by'] : 'nombres';

// Consulta con JOIN para obtener los nombres de las carreras desde la tabla 'carreras'
$query = "
    SELECT a.id, a.fotografia, a.nombres, a.apellidos, a.cu, a.sexo, c.carrera 
    FROM alumnos a 
    JOIN carreras c ON a.codigo_carrera = c.codigo 
    ORDER BY $order_by
";

$alumnos = $con->query($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Alumnos</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th {
      background-color: #0b3c83;
      /* Azul */
      color: white;
      padding: 10px;
    }

    th a {
      color: white;
      text-decoration: none;
    }

    td,
    th {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }

    /* Filas pares gris, impares blanco */
    tr:nth-child(odd) {
      background-color: white;
    }

    tr:nth-child(even) {
      background-color: #939393;
      /* Gris claro */
    }

    /* Estilo para la imagen */
    .fotografia {
      width: 50px;
      height: 50px;
      object-fit: cover;
    }
  </style>
</head>

<body>

  <h2>Lista de Alumnos</h2>

  <table>
    <tr>
      <th>Nro</th>
      <th><a href="?order_by=fotografia">Fotografía</a></th>
      <th><a href="?order_by=nombres">Nombre</a></th>
      <th><a href="?order_by=apellidos">Apellidos</a></th>
      <th><a href="?order_by=cu">CU</a></th>
      <th><a href="?order_by=sexo">Sexo</a></th>
      <th><a href="?order_by=carrera">Carrera</a></th>
    </tr>

    <?php if ($alumnos->num_rows > 0) { ?>
      <?php $nro = 1; ?>
      <?php while ($alumno = $alumnos->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $alumno['id']; ?></td>
          <td>
            <img src="uploads/<?php echo $alumno['fotografia']; ?>" alt="Foto" class="fotografia">
          </td>
          <td><?php echo $alumno['nombres']; ?></td>
          <td><?php echo $alumno['apellidos']; ?></td>
          <td><?php echo $alumno['cu']; ?></td>
          <td><?php echo $alumno['sexo'] == 'M' ? 'Masculino' : 'Femenino'; ?></td>
          <td><?php echo $alumno['carrera']; ?></td>
        </tr>
      <?php } ?>
    <?php } else { ?>
      <tr>
        <td colspan="7">No hay alumnos registrados</td>
      </tr>
    <?php } ?>
  </table>

</body>

</html>

<?php $con->close(); ?>