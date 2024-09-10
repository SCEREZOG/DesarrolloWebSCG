<?php
include 'conexion.php';
$sql="SELECT id_numero_mesas,departamento_id,municipio_id,lugar_id,recinto_id FROM mesas";
$resultado = $con->query($sql);
?>

<table>
    <tr>
        <th>ID Departamento</th>
        <th>ID municipio</th>
        <th>ID lugar</th>
        <th>ID recinto</th>
        <th>Operaciones</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()) 
        {?>
    <tr>
        <td><?php echo $fila['departamento_id']; ?></td>
        <td><?php echo $fila['municipio_id']; ?></td>
        <td><?php echo $fila['lugar_id']; ?></td>
        <td><?php echo $fila['recinto_id']; ?></td>
        <td><a href="mesas_formUpdate.php?id=<?php echo $fila['id_numero_mesas'];?>">Editar</a> 
        <a href="mesas_delete.php?id=<?php echo $fila['id_numero_mesas'];?>">Eliminar</a>
    </tr>
    <?php }?>
</table>
<a href="mesas_formInsertar.html">Insertar nuevo Registro</a>
