<?php
include('conexion.php');

// Consulta para contar alumnos por sexo
$query = "
    SELECT sexo, COUNT(*) as total 
    FROM alumnos 
    GROUP BY sexo
";

$resultado = $con->query($query);

$varones = 0;
$mujeres = 0;

// Asignar los totales a las variables correspondientes
if ($resultado->num_rows > 0) {
  while ($row = $resultado->fetch_assoc()) {
    if ($row['sexo'] == 'M') {
      $varones = $row['total'];
    } elseif ($row['sexo'] == 'F') {
      $mujeres = $row['total'];
    }
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumnos por Sexo</title>
  <style>
    table {
      width: 50%;
      border-collapse: collapse;
      margin: 20px auto;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #0b3c83;
      /* Azul */
      color: white;
    }

    /* Iconos */
    .icono {
      width: 70px;
      height: 70px;
    }

    .tabla-container {
      display: flex;
      justify-content: center;
    }
  </style>
</head>

<body>

  <div class="tabla-container">
    <table>
      <tbody>
        <tr>
          <td>
            Total Varones
          </td>
          <td>
            <img src="icono_varon.png" alt="Varones" class="icono">
          </td>
          <td><?php echo $varones; ?></td>
        </tr>
        <tr>
          <td>
            Total mujeres
          </td>
          <td>
            <img src="icono_mujer.png" alt="Mujeres" class="icono">
          </td>
          <td><?php echo $mujeres; ?></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>

</html>

<?php $con->close(); ?>