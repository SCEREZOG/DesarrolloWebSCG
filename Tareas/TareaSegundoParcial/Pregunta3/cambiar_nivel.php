<?php
session_start();
require_once '../conexion.php';

if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 0) {
    echo "error_permisos";
    exit;
}

if (isset($_POST['correo']) && isset($_POST['nivel'])) {
    try {
        $sql = "UPDATE usuarios SET nivel = '" . $_POST['nivel'] . "' WHERE usuario = '" . $_POST['correo'] . "'";
        $resultado = $con->query($sql);
        
        if($resultado) {
            echo "success";
        } else {
            echo "error";
        }
    } catch(Exception $e) {
        echo "error";
    }
} else {
    echo "error_parametros";
}
?>