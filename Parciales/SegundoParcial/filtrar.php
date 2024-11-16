<?php
include 'conexion.php';
$carrera = $_POST['carrera'];

echo '<tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Carrera</th>
        <th>Imagen</th>
      </tr>';

if ($carrera == 'todas') {
    $query = "SELECT l.*, c.carrera as nombre_carrera 
              FROM libros l 
              INNER JOIN carreras c ON l.idcarrera = c.id";
} else {
    $query = "SELECT l.*, c.carrera as nombre_carrera 
              FROM libros l 
              INNER JOIN carreras c ON l.idcarrera = c.id 
              WHERE l.idcarrera = " . intval($carrera);
}

$resultado = $conn->query($query);

while ($fila = $resultado->fetch_assoc()) {
    echo '<tr>
            <td>' . $fila['titulo'] . '</td>
            <td>' . $fila['autor'] . '</td>
            <td>' . $fila['nombre_carrera'] . '</td>
            <td><img src="images/' . $fila['imagen'] . '" width="100"></td>
          </tr>';
}

$conn->close();
