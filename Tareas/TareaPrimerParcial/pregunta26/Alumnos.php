<?php
include "conexion.php";
if (isset($_POST['alumnos'])) {
  $alumnos = $_POST['alumnos'];
  foreach ($alumnos as $alumno) {
    $nombre = $alumno['Nombres'];
    $apellidos = $alumno['Apellidos'];
    $CU = $alumno['CU'];
    $sexo = $alumno['Sexo'];
    $carrera = $alumno['codigo_carrera'];
    $sql = "INSERT INTO alumnos(nombres, apellidos, Cu, sexo, codigo_carrera) VALUES ('$nombre', '$apellidos', '$CU', '$sexo', '$carrera')";

    $con->query($sql);
  }
}

$sql = "SELECT * FROM Alumnos";
$resultado = $con->query($sql);
$i = 0;
?>

<table>
  <th>
  <td>Numero</td>
  <td>Nombres</td>
  <td>Apellidos</td>
  <td>CU</td>
  <td>Sexo</td>
  <td>Carrera</td>
  </th>
  <?php
  while ($row = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $i++ . "</td";
    echo "<td>" . $row['nombres'] . "</td";
    echo "<td>" . $row['apellidos'] . "</td";
    echo "<tr>" . $row['Cu'] . "</tr";
    echo "<tr>" . $row['sexo'] . "</tr";
    echo "<tr>" . $row['codigo_carrera'] . "</tr";
    echo "</tr>";
  }
  ?>
</table>