<?php
include 'conexion.php';
$departamento_id = $_POST['departamento_id'];
$municipio_id = $_POST['municipio_id'];
$lugar_id = $_POST['lugar_id'];
$recinto_id = $_POST['recinto_id'];
$sql = "INSERT INTO mesas (departamento_id,municipio_id,lugar_id,recinto_id) VALUES ('$departamento_id','$municipio_id','$lugar_id','$recinto_id')";
$resultado=$con->query($sql);
if($resultado){?>
<h1>Datos insertados correctamente</h1>
<meta http-equiv="refresh" content="3; url=mesas_read.php">
<?php
}else{
    echo "Error al insertar los datos";
}
?>