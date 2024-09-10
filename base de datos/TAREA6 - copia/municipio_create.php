<?php
include 'conexion.php';
$nombre = $_POST['nombrem'];
$provincia = $_POST['provincia'];
$fecha_fun = $_POST['fecha_fun'];
$superficie_m=$_POST['superficie_m'];
$poblacion_m = $_POST['poblacion_m'];
$departamento_id= $_POST['departamento_id'];
$sql = "INSERT INTO municipio (nombre,provincia,fecha_fundacion,superficie_m,poblacion_m,departamento_id) VALUES ('$nombre','$provincia','$fecha_fun','$superficie_m','$poblacion_m','$departamento_id')";
$resultado=$con->query($sql);
if($resultado){?>
<h1>Datos insertados correctamente</h1>
<meta http-equiv="refresh" content="3; url=municipio_read.php">
<?php
}else{
    echo "Error al insertar los datos";
}
?>