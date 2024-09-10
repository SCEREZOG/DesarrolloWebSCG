<?php
include 'conexion.php';
$sql="SELECT lugar_id,nombre_lugar,tipo_lugar,zona FROM lugar";
$resultado = $con->query($sql);
?>

<table>
    <tr>
        <th>Nomber Lugar</th>
        <th>Tipo</th>
        <th>Zona</th>
        <th>Operaciones</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()) 
        {?>
    <tr>
        <td><?php echo $fila['nombre_lugar']; ?></td>
        <td><?php echo $fila['tipo_lugar']; ?></td>
        <td><?php echo $fila['zona']; ?></td>
        <td><a href="lugar_formUpdate.php?id=<?php echo $fila['lugar_id'];?>">Editar</a> 
        <a href="lugar_delete.php?id=<?php echo $fila['lugar_id'];?>">Eliminar</a>
    </tr>
    <?php }?>
</table>
<a href="lugar_formInsertar.html">Insertar nuevo Registro</a>
