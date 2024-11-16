<?php
session_start();
require_once '../conexion.php';

$nivel_usuario_actual = isset($_SESSION['nivel']) ? $_SESSION['nivel'] : 1;

try {
    $sql = "SELECT usuario, nombrecompleto, nivel FROM usuarios";
    $resultado = $con->query($sql); 
    
    $html = '<table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Correos</th>
                        <th>Nombre Completo</th>
                        <th>Nivel</th>';
    
    if ($nivel_usuario_actual == 0) {
        $html .= '<th>Operación</th>';
    }
    
    $html .= '</tr></thead><tbody>';
    
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>
                    <td>' . htmlspecialchars($row['usuario']) . '</td>
                    <td>' . htmlspecialchars($row['nombrecompleto']) . '</td>
                    <td>' . ($row['nivel'] == 0 ? 'Administrador' : 'Usuario') . '</td>';
        
        if ($nivel_usuario_actual == 0) {
            $texto_boton = $row['nivel'] == 0 ? 'Cambiar a usuario' : 'Cambiar a administrador';
            $nuevo_nivel = $row['nivel'] == 0 ? 1 : 0;
            $clase_boton = $row['nivel'] == 0 ? 'btn-secondary' : 'btn-warning';
            
            $html .= '<td>
                        <button class="btn btn-cambiar ' . $clase_boton . '" 
                                data-correo="' . htmlspecialchars($row['usuario']) . '" 
                                data-nuevo-nivel="' . $nuevo_nivel . '">
                            ' . $texto_boton . '
                        </button>
                    </td>';
        }
        
        $html .= '</tr>';
    }
    
    $html .= '</tbody></table>';
    $html .= '<div style="text-align: right; margin: 10px;">
    <button onclick="cerrarSesion()" class="btn-logout">Cerrar Sesión</button>
</div>';
    echo $html;
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>