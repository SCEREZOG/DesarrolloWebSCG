<?php
include 'conexion.php';

$id=$_POST['id'];
$nombre = $_POST['nombrem'];
$provincia = $_POST['provincia'];
$fecha_fundacion = $_POST['fecha_fun'];
$superficie_m=$_POST['superficie'];
$poblacion_m = $_POST['poblacion'];
$departamento_id= $_POST['dep_id'];

$sql="UPDATE municipio SET nombre='$nombre',fecha_fundacion='$fecha_fundacion',provincia='$provincia',superficie_m='$superficie_m',poblacion_m='$poblacion_m',departamento_id=$departamento_id WHERE municipio_id=$id";
$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro actualizado correctamente</h2>
    <meta http-equiv="refresh" content="3;url=municipio_read.php">
    <?php
}else{
    echo "Error al actualizar";
}
?>