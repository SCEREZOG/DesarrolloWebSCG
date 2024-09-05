<?php
include "conexion.php";

$sql = "SELECT id,email,nivel FROM usuarios";
$resultado = $con->query($sql);
?>
<table>
  <tr>
    <th>E-mail</th>
    <th>Nivel</th>
  </tr>
  <?php
  while ($fila = $resultado->fetch_assoc()) {;
  ?>
    <tr>
      <td><?php echo $fila['email']; ?></td>
      <td><?php
          if ($fila['nivel'] == 1) {
            echo "administrador";
          } else {
            echo "usuario";
          } ?></td>
      <td><a href="form_update.php?id=<?php echo $fila['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $fila['id']; ?>">Eliminar</a>

    </tr>
  <?php } ?>
</table>
<a href="form.html">Registrar nuevo</a>