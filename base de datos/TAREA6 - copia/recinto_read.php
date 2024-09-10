<?php
include 'conexion.php';
$sql="SELECT recinto_id,nombre_recinto,ubicacion,tamaño,capacidad,seccion_electoral,estado,horario_apertura,horario_cierre FROM recinto";
$resultado = $con->query($sql);
?>

<table>
    <tr>
        <th>Nombre Recinto</th>
        <th>ubicacion</th>
        <th>tamaño</th>
        <th>capacidad</th>
        <th>seccion Electoral</th>
        <th>estado</th>
        <th>horario Apertura</th>
        <th>Horario Cierre</th>
        <th>Operaciones</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()) 
        {?>
    <tr>
        <td><?php echo $fila['nombre_recinto']; ?></td>
        <td><?php echo $fila['ubicacion']; ?></td>
        <td><?php echo $fila['tamaño']; ?></td>
        <td><?php echo $fila['capacidad']; ?></td>
        <td><?php echo $fila['seccion_electoral']; ?></td>
        <td><?php echo $fila['estado']; ?></td>
        <td><?php echo $fila['horario_apertura']; ?></td>
        <td><?php echo $fila['horario_cierre']; ?></td>
        <td><a href="recinto_formUpdate.php?id=<?php echo $fila['recinto_id'];?>">Editar</a> 
        <a href="recinto_delete.php?id=<?php echo $fila['recinto_id'];?>">Eliminar</a>
    </tr>
    <?php }?>
</table>
<a href="recinto_formInsertar.html">Insertar nuevo Registro</a>
