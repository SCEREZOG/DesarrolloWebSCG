<?php
include "conexion.php";
$email = $_POST['email'];
$password = sha1($_POST['password']);


$sql = "SELECT id,email,nivel FROM usuarios WHERE email='$email' and password='$password'";
$resultado = $con->query($sql);
if ($resultado) {
  if ($fila = $resultado->fetch_assoc()) {
    header("location.read.php")
  } else {
    echo "incorrecto";
    ?>
    <meta http-equiv="refresh" content="3; url=login.html">
    <?php
  }
} else {
  echo "error";
}
