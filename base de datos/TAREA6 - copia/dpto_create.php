<?php
include 'conexion.php';
$nombre_dep = $_POST['namedep'];
$fecha_creacion = $_POST['fecha_creacion'];
$capital = $_POST['capital'];
$superficie = $_POST['superficie'];
$poblacion = $_POST['poblacion'];
$sql = "INSERT INTO departamentos (nombre_dep,fecha_creacion,capital,superficie,poblacion) VALUES ('$nombre_dep','$fecha_creacion','$capital','$superficie','$poblacion')";
$resultado=$con->query($sql);
if($resultado){?>
<h1>Datos insertados correctamente</h1>
<meta http-equiv="refresh" content="3; url=dpto_read.php">
<?php
}else{
    echo "Error al insertar los datos";
}
?>