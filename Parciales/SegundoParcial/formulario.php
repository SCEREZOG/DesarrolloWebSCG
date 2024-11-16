<?php
include 'conexion.php';

$editorialesQuery = "SELECT id, editorial FROM editoriales";
$editorialesResult = $conn->query($editorialesQuery);

$carrerasQuery = "SELECT id, carrera FROM carreras";
$carrerasResult = $conn->query($carrerasQuery);

$usuariosQuery = "SELECT id, nombrecompleto FROM usuarios";
$usuariosResult = $conn->query($usuariosQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div>
        <form action="javascript:insertarLibro()" method="post" enctype="multipart/form-data" id="form_libro">
            <div>
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen">
            </div>
            <div>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" id="titulo" required>
            </div>
            <div>
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" required>
            </div>
            <div>
                <label for="editorial">Editorial:</label>
                <select name="editorial" id="editorial" required>
                    <?php while ($editorial = $editorialesResult->fetch_assoc()) { ?>
                        <option value="<?= $editorial['id'] ?>"><?= $editorial['editorial'] ?></option>
                    <?php }; ?>
                </select>
            </div>
            <div>
                <label for="anio">Año:</label>
                <input type="number" name="anio" id="anio" required min="1900" max="<?= date('Y') ?>">
            </div>
            <div>
                <label for="usuario">Usuario:</label>
                <select name="usuario" id="usuario" required>
                    <?php while ($usuario = $usuariosResult->fetch_assoc()) { ?>
                        <option value="<?= $usuario['id'] ?>"><?= $usuario['nombrecompleto'] ?></option>
                    <?php }; ?>
                </select>
            </div>
            <div>
                <label for="carrera">Carrera:</label>
                <select name="carrera" id="carrera" required>
                    <?php while ($carrera = $carrerasResult->fetch_assoc()) { ?>
                        <option value="<?= $carrera['id'] ?>"><?= $carrera['carrera'] ?></option>
                    <?php }; ?>
                </select>
            </div>
            <div>
                <button type="submit" name="submit">Registrar</button>
            </div>
        </form>
    </div>
</body>
</html>