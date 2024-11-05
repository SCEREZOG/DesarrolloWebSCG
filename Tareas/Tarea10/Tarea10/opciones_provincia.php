<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    $id=$_GET['iddepartamento'];

    include 'conexion.php';
    $sql="SELECT iddepartamento,nombre FROM provincias where iddepartamento=$id";
    $resultado=$con->query($sql);

    while ($fila = $resultado->fetch_assoc()) {
        echo "<option value='" . $fila['id'] . "'>" . $fila['nombre'] . "</option>";
    }
?>
    <form action="">

    

    </form>

    <script src="fetch.js"></script>
</body>
</html>