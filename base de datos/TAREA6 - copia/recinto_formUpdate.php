<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="SELECT recinto_id,nombre_recinto,ubicacion,tamaño,capacidad,seccion_electoral,estado,horario_apertura,horario_cierre FROM recinto WHERE recinto_id=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>
<form action="recinto_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fila['recinto_id'];?>">

    <label for="nombre_recinto">nombre_recinto</label>
    <input type="text" name="nombre_recinto" value="<?php echo $fila['nombre_recinto'];?>"  ><br>
    <label for="ubicacion">ubicacion</label>
    <input type="text" name="ubicacion" value="<?php echo $fila['ubicacion'];?>" ><br>
    <label for="tamaño">tamaño</label>
    <input type="number" name="tamaño" value="<?php echo $fila['tamaño'];?>" ><br>
    <label for="capacidad">capacidad</label>
    <input type="number" name="capacidad" value="<?php echo $fila['capacidad'];?>" ><br>
    <label for="seccion_electoral">seccion_electoral</label>
    <input type="number" name="seccion_electoral" value="<?php echo $fila['seccion_electoral'];?>" ><br>
    <label for="estado">estado</label>
    <input type="text" name="estado" value="<?php echo $fila['estado'];?>" ><br>
    <label for="horario_apertura">horario_apertura</label>
    <input type="time" name="horario_apertura" value="<?php echo $fila['horario_apertura'];?>" ><br>
    <label for="horario_cierre">horario_cierre</label>
    <input type="time" name="horario_cierre" value="<?php echo $fila['horario_cierre'];?>" ><br>
    <input type="submit" value="Actualizar">
</form>