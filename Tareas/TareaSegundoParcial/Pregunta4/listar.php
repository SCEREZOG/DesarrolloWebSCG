<?php
include('../conexion.php');
//si existe por el metodo get con la variable ordenar 
if (isset($_GET['ordenar'])) {
  $ordenar = $_GET['ordenar'];
} else {
  $ordenar = 'id';
}
$sql = "SELECT titulo,imagen,autor FROM libros ORDER BY  $ordenar asc";
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) {
?>

  <table id="tabla" border="1" style="border-collapse: collapse; align-items:center; margin:10px">
    <tr>
      <th>Numero</th>
      <th><a href="javascript:listar('ordenar=titulo')">Nombre</a></th>
      <th>imagen</th>
      <th><a href="javascript:listar('ordenar=autor')">Autor</a></th>
    </tr>
    <?php
    //para recorrer el resultado 
    while ($row = $result->fetch_assoc()) {
    ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['titulo']; ?></td>
        <td><img src="./images/<?php echo $row['imagen']; ?> " width="50" height="75" alt=""></td>
        <td><?php echo $row['autor']; ?></td>
      </tr>
    <?php
    }
    ?>
  </table>
<?php } else {
  echo "tabla vacia";
}
?>