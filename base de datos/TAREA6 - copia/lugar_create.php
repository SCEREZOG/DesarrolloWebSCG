<?php
include 'conexion.php';
$nombre_lugar = $_POST['nombrelug'];
$tipo_lugar = $_POST['tipo'];
$zona = $_POST['zona'];
$sql = "INSERT INTO lugar (nombre_lugar,tipo_lugar,zona) VALUES ('$nombre_lugar','$tipo_lugar','$zona')";
$resultado=$con->query($sql);
if($resultado){?>
<h1>Datos insertados correctamente</h1>
<meta http-equiv="refresh" content="3; url=lugar_read.php">
<?php
}else{
    echo "Error al insertar los datos";
}
?>