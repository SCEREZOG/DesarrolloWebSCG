<?php
include 'conexion.php';

$queryCarreras = "SELECT DISTINCT c.id, c.carrera 
                  FROM carreras c 
                  INNER JOIN libros l ON c.id = l.idcarrera";
$resultadoCarreras = $conn->query($queryCarreras);

echo '<select id="selectCarrera" onchange="filtrarCarrera()">';
echo '<option value="todas">Todas</option>';
while ($fila = $resultadoCarreras->fetch_assoc()) {
  echo '<option value="' . $fila['id'] . '">' . $fila['carrera'] . '</option>';
}
echo '</select>';

echo '<table border="1" id="tablaLibros" style="border-collapse:collapse">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Carrera</th>
            <th>Imagen</th>
        </tr>';

$query = "SELECT l.*, c.carrera
          FROM libros l 
          INNER JOIN carreras c ON l.idcarrera = c.id";
$resultado = $conn->query($query);

while ($fila = $resultado->fetch_assoc()) {
  echo '<tr>
            <td>' . $fila['titulo'] . '</td>
            <td>' . $fila['autor'] . '</td>
            <td>' . $fila['carrera'] . '</td>
            <td><img src="images/' . $fila['imagen'] . '" width="100"></td>
          </tr>';
}

echo '</table>';
$conn->close();
