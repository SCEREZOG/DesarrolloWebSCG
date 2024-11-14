<?php
include 'conexion.php';

$sql = "SELECT id, correo, asunto, mensaje, estado 
        FROM correos 
        WHERE bandeja = 'salida'";
$resultado = $con->query($sql);
?>
<table>
  <tr>
    <th>Correo</th>
    <th>Asunto</th>
    <th>Estado</th>
    <th>Operaciones</th>
  </tr>
  <?php while ($fila = $resultado->fetch_assoc()) { ?>
    <tr style="background-color: <?php echo ($fila['id'] % 2 === 0) ? 'white' : '#D0E7F5'; ?>; color: <?php echo ($fila['id'] % 2 === 0) ? 'black' : 'black'; ?>;">
      <td><?php echo $fila['correo']; ?></td>
      <td><?php echo $fila['asunto']; ?></td>
      <td><?php echo $fila['estado']; ?></td>
      <td>
        <button class="table-button" onclick="mostrarDetalleCorreo(<?php echo $fila['id']; ?>)">
          Ver
        </button>
      </td>

    </tr>
  <?php } ?>
</table>