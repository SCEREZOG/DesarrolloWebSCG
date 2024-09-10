<?php
include 'conexion.php';

$id=$_POST['id'];
$nombre_dep = $_POST['namedep'];
$fecha_creacion = $_POST['fecha_creacion'];
$capital = $_POST['capital'];
$superficie = $_POST['superficie'];
$poblacion = $_POST['poblacion'];

$sql="UPDATE departamentos SET nombre_dep='$nombre_dep',fecha_creacion='$fecha_creacion',capital='$capital',superficie='$superficie',poblacion='$poblacion' WHERE departamento_id=$id";
$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro actualizado correctamente</h2>
    <meta http-equiv="refresh" content="3;url=dpto_read.php">
    <?php
}else{
    echo "Error al actualizar";
}
?>