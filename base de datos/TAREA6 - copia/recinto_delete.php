<?php
include 'conexion.php';

$id=$_GET['id'];

$sql="DELETE FROM recinto WHERE recinto_id=$id";
$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro eliminado correctamente</h2>
    <meta http-equiv="refresh" content="3;url=recinto_read.php">
    <?php
}else{
    echo "Error al eliminar";
}
?>