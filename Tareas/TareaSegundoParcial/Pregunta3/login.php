<?php
session_start();
require_once '../conexion.php';

if(isset($_POST['correo']) && isset($_POST['password'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    
    try {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$correo' AND password = '$password'";
        $resultado = $con->query($sql);
        
        if($row = $resultado->fetch_assoc()) {
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['nivel'] = $row['nivel'];
            $_SESSION['nombre'] = $row['nombrecompleto'];
            
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