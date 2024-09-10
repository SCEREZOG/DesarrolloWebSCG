<?php
include 'conexion.php';
$sql="SELECT departamento_id,nombre_dep,fecha_creacion,capital,superficie,poblacion FROM departamentos";
$resultado = $con->query($sql);
?>

<table>
    <tr>
        <th>Departamento</th>
        <th>fecha Creacion</th>
        <th>Capital</th>
        <th>Superficie</th>
        <th>Poblacion</th>
        <th>Operaciones</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()) 
        {?>
    <tr>
        <td><?php echo $fila['nombre_dep']; ?></td>
        <td><?php echo $fila['fecha_creacion']; ?></td>
        <td><?php echo $fila['capital']; ?></td>
        <td><?php echo $fila['superficie']; ?></td>
        <td><?php echo $fila['poblacion']; ?></td>
        <td><a href="dpto_formUpdate.php?id=<?php echo $fila['departamento_id'];?>">Editar</a> 
        <a href="dpto_delete.php?id=<?php echo $fila['departamento_id'];?>">Eliminar</a>
    </tr>
    <?php }?>
</table>
<a href="dpto_formInsertar.html">Insertar nuevo Registro</a>
