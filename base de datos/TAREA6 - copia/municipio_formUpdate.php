<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="SELECT municipio_id,nombre,provincia,fecha_fundacion,superficie_m,poblacion_m,departamento_id FROM municipio WHERE municipio_id=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>
<form action="municipio_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fila['municipio_id'];?>">
    
    <label for="nombrem">Nombre Municipio</label>
    <input type="text" name="nombrem" value="<?php echo $fila['nombre'];?>"  ><br>
    <label for="provincia">provincia</label>
    <input type="text" name="provincia" value="<?php echo $fila['provincia'];?>"  ><br>
    <label for="text">fecha fundacion</label>
    <input type="date" name="fecha_fun" value="<?php echo $fila['fecha_fundacion'];?>" ><br>
    <label for="superficie">superficie</label>
    <input type="number" name="superficie" value="<?php echo $fila['superficie_m'];?>" ><br>
    <label for="poblacion">poblacion</label>
    <input type="number" name="poblacion" value="<?php echo $fila['poblacion_m'];?>" ><br>
    <label for="dep_id">departamento id</label>
    <input type="number" name="dep_id" value="<?php echo $fila['departamento_id'];?>" ><br>
    <input type="submit" value="Actualizar">
</form>