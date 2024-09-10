<?php
include 'conexion.php';

$id=$_POST['id'];
$nombre_recinto = $_POST['nombre_recinto'];
$ubicacion = $_POST['ubicacion'];
$tamaño = $_POST['tamaño'];
$capacidad=$_POST['capacidad'];
$seccion_electoral = $_POST['seccion_electoral'];
$estado= $_POST['estado'];
$horario_apertura = $_POST['horario_apertura'];
$horario_cierre= $_POST['horario_cierre'];

$sql="UPDATE recinto SET nombre_recinto='$nombre_recinto',ubicacion='$ubicacion',tamaño='$tamaño',capacidad='$capacidad',seccion_electoral='$seccion_electoral',estado='$estado',horario_apertura='$horario_apertura',horario_cierre='$horario_cierre' WHERE recinto_id=$id";
$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro actualizado correctamente</h2>
    <meta http-equiv="refresh" content="3;url=recinto_read.php">
    <?php
}else{
    echo "Error al actualizar";
}
?>