<?php
include 'conexion.php';

$query = "SELECT id, imagen FROM libros"; // Reemplaza "libros" por el nombre de tu tabla si es diferente.
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<div id="galeria">'; // Contenedor de la galería de imágenes
    echo '<table>';
    $contador = 0;

    while ($row = $result->fetch_assoc()) {
        if ($contador % 3 === 0) {
            echo '<tr>'; // Nueva fila cada 3 columnas
        }

        echo '<td style="padding: 10px; text-align: center;">';
        echo '<button style="width: 50px; height: 75px; border: none; background: none;" onclick="abrirModal(\'images/' . $row['imagen'] . '\')">';
        echo '<img src="images/' . $row['imagen'] . '" style="width: 100%; height: 100%; object-fit: cover;" />';
        echo '</button>';
        echo '</td>';

        $contador++;
        if ($contador % 3 === 0) {
            echo '</tr>'; // Cierra fila cada 3 columnas
        }
    }

    if ($contador % 3 !== 0) {
        echo '</tr>'; // Cierra fila incompleta
    }
    echo '</table>';
    echo '</div>'; // Cierra el contenedor de la galería
} else {
    echo 'No hay imágenes disponibles.';
}
?>
