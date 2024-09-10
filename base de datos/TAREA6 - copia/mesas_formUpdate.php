<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="SELECT id_numero_mesas,departamento_id,municipio_id,lugar_id,recinto_id FROM mesas WHERE id_numero_mesas=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>
<form action="mesas_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fila['id_numero_mesas'];?>">
    
    <label for="departamento_id">ID Departamento</label>
    <input type="number" name="departamento_id" value="<?php echo $fila['departamento_id'];?>"><br>
    <label for="municipio_id">ID municipio</label>
    <input type="number" name="municipio_id" value="<?php echo $fila['municipio_id'];?>"><br>
    <label for="lugar_id">ID lugar</label>
    <input type="number" name="lugar_id" value="<?php echo $fila['lugar_id'];?>" ><br>
    <label for="recinto_id">ID recinto</label>
    <input type="number" name="recinto_id" value="<?php echo $fila['recinto_id'];?>"><br>
    <input type="submit" value="Actualizar">
</form>