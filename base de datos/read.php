<?php
include "conexion.php";
$sql = "SELECT nombres,apellidos,Carnet,sexo,fecha_de_nacimiento,direccion FROM padron";
$resultado = $con->query($sql);
?>
<table>
  <tr>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Carnet</th>
    <th>Sexo</th>
    <th>Fecha de Nacimiento</th>
    <th>Direccion</th>
  </tr>
  <?php
  while ($fila = $resultado->fetch_assoc()) {;
  ?>
    <tr>
      <td><?php echo $fila['nombres']; ?></td>
      <td><?php echo $fila['apellidos']; ?></td>
      <td><?php echo $fila['Carnet']; ?></td>
      <td><?php echo $fila['sexo']; ?></td>
      <td><?php echo $fila['fecha_de_nacimiento']; ?></td>
      <td><?php echo $fila['direccion']; ?></td>
    </tr>
  <?php } ?>
</table>