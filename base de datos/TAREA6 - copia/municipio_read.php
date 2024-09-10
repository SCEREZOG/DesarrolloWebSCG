<?php
include 'conexion.php';
$sql="SELECT municipio_id,nombre,provincia,fecha_fundacion,superficie_m,poblacion_m,departamento_id FROM municipio";
$resultado = $con->query($sql);
?>

<table>
    <tr>
        <th>Nombre Municipio</th>
        <th>Provincia</th>
        <th>Fecha Fundacion</th>
        <th>Superficie</th>
        <th>Poblacion</th>
        <th>Departamento Id</th>
        <th>Operaciones</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()) 
        {?>
    <tr>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['provincia']; ?></td>
        <td><?php echo $fila['fecha_fundacion']; ?></td>
        <td><?php echo $fila['superficie_m']; ?></td>
        <td><?php echo $fila['poblacion_m']; ?></td>
        <td><?php echo $fila['departamento_id']; ?></td>
        <td><a href="municipio_formUpdate.php?id=<?php echo $fila['municipio_id'];?>">Editar</a> 
        <a href="municipio_delete.php?id=<?php echo $fila['municipio_id'];?>">Eliminar</a>
    </tr>
    <?php }?>
</table>
<a href="municipio_formInsertar.html">Insertar nuevo Registro</a>
