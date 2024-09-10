<?php
include 'conexion.php';

$id=$_POST['id'];
$departamento_id = $_POST['departamento_id'];
$municipio_id = $_POST['municipio_id'];
$lugar_id = $_POST['lugar_id'];
$recinto_id = $_POST['recinto_id'];
$sql="UPDATE mesas SET departamento_id='$departamento_id',municipio_id='$municipio_id',lugar_id='$lugar_id',recinto_id='$recinto_id' WHERE id_numero_mesas=$id";
$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro actualizado correctamente</h2>
    <meta http-equiv="refresh" content="3;url=mesas_read.php">
    <?php
}else{
    echo "Error al actualizar";
}
?>