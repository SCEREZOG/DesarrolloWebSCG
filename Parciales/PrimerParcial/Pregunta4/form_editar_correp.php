<?php
include 'conexion.php';

// Obtener el ID del usuario
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // Obtener la información del usuario de acuerdo a su ID
  $sql = "SELECT * FROM usuarios WHERE id = $id";
  $resultado = $conexion->query($sql);
  $usuario = $resultado->fetch_assoc();
} else {
  $id = 0;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Editar Correo</title>
</head>

<body>
  <h3>Nombres y Apellidos: <?= $usuario['nombres'] . " " . $usuario['apellidos'] ?></h3>
  <form action="pregunta4.php" method="POST">
    <label for="correo">Correo:</label>
    <input type="email" name="correo" value="<?= $usuario['correo'] ?>" required>
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
    <input type="hidden" name="actualizar">
    <!-- este hidden input  es para el if en pregunta4.php linea  11, $_POST['actualizar']-->
    <br><br>
    <input type="submit" value="Actualizar">
  </form>
</body>

</html>