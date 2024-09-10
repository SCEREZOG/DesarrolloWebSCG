<?php
include 'conexion.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT email,nivel FROM usuarios WHERE email='$email' and password = '$password'";
$resultado = $con->query($sql);
if($resultado){
    if($fila = $resultado->fetch_assoc()){
        header("location:usuario_read.php");
    } else {
     ?>
    <meta http-equiv="refresh" content="3;url=login.html">
    <?php
    } 
}else {
    echo "hubo un error";
}
?> 