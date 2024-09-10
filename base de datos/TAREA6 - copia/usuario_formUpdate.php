<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="SELECT id_u,email,password,nivel FROM usuarios WHERE id_u=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>
<form action="usuario_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fila['id_u'];?>">
    
    <label for="email">Email</label>
    <input type="email" name="email" value="<?php echo $fila['email'];?>" ><br>
    <label for="password">Password</label>
    <input type="password" name="password" value="<?php echo $fila['password'];?>" ><br>
    <label for="nivel">nivel</label>
    <input type="number" name="nivel" value="<?php echo $fila['nivel'];?>" ><br>
    <input type="submit" value="Actualizar">
</form>