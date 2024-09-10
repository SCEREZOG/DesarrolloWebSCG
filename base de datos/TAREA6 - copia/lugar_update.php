<?php
include 'conexion.php';

$id=$_POST['id'];
$nombre_lugar = $_POST['nombrelug'];
$tipo_lugar = $_POST['tipo'];
$zona = $_POST['zona'];

$sql="UPDATE lugar SET nombre_lugar='$nombre_lugar',tipo_lugar='$tipo_lugar',zona='$zona' WHERE lugar_id=$id";
$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro actualizado correctamente</h2>
    <meta http-equiv="refresh" content="3;url=lugar_read.php">
    <?php
}else{
    echo "Error al actualizar";
}
?>