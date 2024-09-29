<?php
session_start();

if (isset($_POST)) {
    // Guardar los valores en sesiones
    $_SESSION['a'] = $_POST['a'];
    $_SESSION['b'] = $_POST['b'];
    $_SESSION['c'] = $_POST['c'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menú de Operaciones</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <button class="sumar button" name="operacion" value="sumar">Sumar</button>
        <button class="restar button" name="operacion" value="restar">Restar</button>
        <button class="multiplicar button" name="operacion" value="multiplicar">Multiplicar</button>
        <button class="dividir button" name="operacion" value="dividir">Dividir</button>
    </form>
</body>
</html>
