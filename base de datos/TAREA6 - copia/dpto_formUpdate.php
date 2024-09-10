<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="SELECT departamento_id,nombre_dep,fecha_creacion,capital,superficie,poblacion FROM departamentos WHERE departamento_id=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>
<form action="dpto_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fila['departamento_id'];?>">
    
    <label for="namedep">Nombre Departamento</label>
    <input type="text" name="namedep" value="<?php echo $fila['nombre_dep'];?>" ><br>
    <label for="fecha_creacion">fecha de creacion</label>
    <input type="date" name="fecha_creacion" value="<?php echo $fila['fecha_creacion'];?>" ><br>
    <label for="capital">capital</label>
    <input type="text" name="capital" value="<?php echo $fila['capital'];?>" ><br>
    <label for="superficie">superficie</label>
    <input type="number" name="superficie" value="<?php echo $fila['superficie'];?>" ><br>
    <label for="poblacion">poblacion</label>
    <input type="number" name="poblacion" value="<?php echo $fila['poblacion'];?>" ><br>
    <input type="submit" value="Actualizar">
</form>