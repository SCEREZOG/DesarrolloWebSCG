<?php
include 'conexion.php';
$id = $_GET['id'];
$sql = "SELECT id,email,password,nivel FROM usuarios WHERE id=$id";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();
?>
<form action="update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
  <label for="">E-mail</label>
  <input type="email" name="email" value="<?php echo $fila['email']; ?>"><br>
  <label for="">Password</label>
  <input type="password" name="password" value="<?php echo $fila['password']; ?>"><br>
  <label for="">Nivel</label>
  <select name="nivel" value="<?php echo $fila['nivel']; ?>">
    <option value="1">Administrador</option>
    <option value="2">Usuario</option>
  </select>

  <input type="submit" value="Actualizar">
</form>