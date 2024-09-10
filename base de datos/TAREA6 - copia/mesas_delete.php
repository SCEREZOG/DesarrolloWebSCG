<?php
include 'conexion.php';

$id=$_GET['id'];

$sql="DELETE FROM mesas WHERE id_numero_mesas=$id";
$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro eliminado correctamente</h2>
    <meta http-equiv="refresh" content="3;url=mesas_read.php">
    <?php
}else{
    echo "Error al eliminar";
}
?>