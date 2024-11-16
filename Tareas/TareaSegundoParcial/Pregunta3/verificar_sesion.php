<?php
session_start();
if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
    echo "logueado";
} else {
    echo "no_logueado";
}
?>