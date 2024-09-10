<?php
include 'conexion.php';
$sql="SELECT id_u,email,password,nivel FROM usuarios";
$resultado = $con->query($sql);
?>

<table>
    <tr>
        <th>Email</th>
        <th>Nivel</th>
        <th>Operaciones</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()) 
        {?>
    <tr>
        <td><?php echo $fila['email']; ?></td>
        <td><?php if($fila['nivel']==1){
            echo "administrador";
        } else {
            echo "usuario";
        } ?></td>
        <td><a href="usuario_formUpdate.php?id=<?php echo $fila['id_u'];?>">Editar</a> 
        <a href="usuario_delete.php?id=<?php echo $fila['id_u'];?>">Eliminar</a>
    </tr>
    <?php }?>
</table>
<a href="usuario_formInsertar.html">Insertar nuevo Registro</a>
