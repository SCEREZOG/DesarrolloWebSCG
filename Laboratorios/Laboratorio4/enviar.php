<?php
include 'conexion.php';
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$estado = "E";
$bandeja = "salida";
$sql = "INSERT INTO correos (bandeja, correo, asunto, mensaje, estado) VALUES ('$bandeja','$correo', '$asunto', '$mensaje', '$estado')";
$resultado = $con->query($sql);
if ($resultado)
  echo "Mensaje enviado";
else
  echo "Error al enviar mensaje";
