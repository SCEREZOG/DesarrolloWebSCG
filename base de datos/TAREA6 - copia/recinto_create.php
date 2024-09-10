<?php
include 'conexion.php';
$nombre_recinto = $_POST['nombre_recinto'];
$ubicacion = $_POST['ubicacion'];
$tamaño = $_POST['tamaño'];
$capacidad=$_POST['capacidad'];
$seccion_electoral = $_POST['seccion_electoral'];
$estado= $_POST['estado'];
$horario_apertura = $_POST['horario_apertura'];
$horario_cierre= $_POST['horario_cierre'];
$sql = "INSERT INTO recinto (nombre_recinto,ubicacion,tamaño,capacidad,seccion_electoral,estado,horario_apertura,horario_cierre) VALUES ('$nombre_recinto','$ubicacion','$tamaño','$capacidad','$seccion_electoral','$estado','$horario_apertura','$horario_cierre')";
$resultado=$con->query($sql);
if($resultado){?>
<h1>Datos insertados correctamente</h1>
<meta http-equiv="refresh" content="3; url=recinto_read.php">
<?php
}else{
    echo "Error al insertar los datos";
}
?>