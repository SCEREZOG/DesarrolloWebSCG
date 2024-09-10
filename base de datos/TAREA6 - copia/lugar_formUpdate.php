<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="SELECT lugar_id,nombre_lugar,tipo_lugar,zona FROM lugar WHERE lugar_id=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>
<form action="lugar_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fila['lugar_id'];?>">
    
    <label for="nombrelug">Nombre Lugar</label>
    <input type="text" name="nombrelug" value="<?php echo $fila['nombre_lugar'];?>" ><br>
    <label for="tipo">tipo</label>
    <input type="text" name="tipo" value="<?php echo $fila['tipo_lugar'];?>" ><br>
    <label for="zona">zona</label>
    <input type="text" name="zona" value="<?php echo $fila['zona'];?>" ><br>
    <input type="submit" value="Actualizar">
</form>