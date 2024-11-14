<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cliente de Correos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .contenedor {
      display: flex;
      flex-direction: column;
      margin: 20px auto;
      width: 90%;
      max-width: 800px;
      align-items: center;
      background: #ffffff;
      border: none;
      padding: 15px;
    }

    .redactar button {
      width: 120px;
      height: 40px;
      background-color: cornflowerblue;
      border: 1px solid black;
      color: white;
      cursor: pointer;
      margin-bottom: 15px;
    }

    .medio {
      display: flex;
      width: 100%;
      justify-content: space-between;
    }

    .bandeja {
      display: flex;
      flex-direction: column;
      width: 140px;
      padding: 10px;
      gap: 10px;
    }

    .bandeja button {
      padding: 8px;
      cursor: pointer;
      border: 1px solid #ccc;
      background-color: white;
      text-align: left;
    }

    #contenido {
      flex: 1;
      border: 1px solid black;
      padding: 10px;
      margin-left: 20px;
      background-color: #ffffff;
      position: relative;
      /* Necesario para el posicionamiento del modal */
      min-height: 400px;
      /* Asegura una altura mínima para el contenido */
    }

    .modal-contenido-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .modal-contenido-ventana {
      background: white;
      padding: 20px;
      border-radius: 8px;
      width: 80%;
      max-width: 400px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .modal-contenido-ventana h2 {
      color: #333;
      margin-bottom: 20px;
      font-size: 1.2em;
      text-align: center;
    }

    #detalleCorreo {
      margin: 15px 0;
    }

    #detalleCorreo p {
      margin: 10px 0;
      padding: 5px 0;
      border-bottom: 1px solid #eee;
    }

    #detalleCorreo strong {
      color: #555;
      width: 80px;
      display: inline-block;
    }

    .close-btn {
      background: cornflowerblue;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
      display: block;
      width: 100px;
      margin: 15px auto 0;
    }

    .close-btn:hover {
      background: #4171d6;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    table th,
    table td {
      padding: 8px;
      text-align: left;
      border: 1px solid cornflowerblue;
    }

    table th {
      background-color: cornflowerblue;
      color: white;
    }

    .table-button {
      background-color: cornflowerblue;
      color: white;
      border: 1px solid black;
      padding: 5px 10px;
      cursor: pointer;
    }

    .table-button:hover {
      background-color: #7fa8d9;
    }

    /* Otros estilos */
    .table-button {
      background-color: cornflowerblue;
      color: white;
      border: 1px solid black;
      padding: 5px 10px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="contenedor">
    <div class="redactar">
      <button onclick="redactar()">Redactar</button>
    </div>
    <div class="medio">
      <div class="bandeja">
        <button style="border: 1px solid blue;" onclick="entrada()">Bandeja de Entrada</button>
        <button style="border: 1px solid orange;" onclick="salida()">Bandeja de Salida</button>
      </div>
      <div id="contenido">
        <?php
        include 'conexion.php';

        $sql = "SELECT id, correo, asunto, estado FROM correos";
        $resultado = $con->query($sql);
        ?>

        <div id="tabla">
          <table>
            <thead>
              <tr>
                <th>Correo</th>
                <th>Asunto</th>
                <th>Estado</th>
                <th>Operación</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($fila = $resultado->fetch_assoc()) {
              ?>
                <tr style="background-color: <?php echo ($fila['id'] % 2 === 0) ? 'white' : '#D0E7F5'; ?>; color: <?php echo ($fila['id'] % 2 === 0) ? 'black' : 'black'; ?>;">
                  <td><?php echo $fila['correo']; ?></td>
                  <td><?php echo $fila['asunto']; ?></td>
                  <td><?php echo $fila['estado']; ?></td>
                  <td>
                    <button class="table-button" onclick="mostrarDetalleCorreo(<?php echo $fila['id']; ?>)">
                      Ver
                    </button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="javascript.js"></script>
</body>

</html>