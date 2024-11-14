<?php
include 'conexion.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT correo, asunto, mensaje, estado FROM correos WHERE id = $id";
  $resultado = $con->query($sql);

  if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    echo "<p><strong>Correo:</strong> {$fila['correo']}</p>";
    echo "<p><strong>Asunto:</strong> {$fila['asunto']}</p>";
    echo "<p><strong>Estado:</strong> {$fila['estado']}</p>";
    echo "<p><strong>Mensaje:</strong> {$fila['mensaje']}</p>";
  } else {
    echo "<p>Detalles no encontrados.</p>";
  }
} else {
  echo "<p>Error: No se proporcionó un ID de correo.</p>";
}
?>
