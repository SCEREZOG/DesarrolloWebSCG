function entrada() {
  var contenedor;
  contenedor = document.getElementById("contenido");
  var ajax = new XMLHttpRequest();
  ajax.open("get", "BandejaEntrada.php", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      contenedor.innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}

function salida() {
  var contenedor = document.getElementById("contenido");

  fetch("BandejaSalida.php")
    .then(response => response.text())
    .then(data => (contenedor.innerHTML = data));
}

function mostrarDetalleCorreo(id) {
  const contenedor = document.getElementById("contenido");
  const tablaActual = contenedor.innerHTML;

  // Crear el overlay y modal dentro del contenido
  const modalHTML = `
    <div class="modal-contenido-overlay">
      <div class="modal-contenido-ventana">
        <h2>Detalles del Correo</h2>
        <div id="detalleCorreo"></div>
        <button class="close-btn" onclick="cerrarModal()">Cerrar</button>
      </div>
    </div>
  `;

  // Guardar la tabla actual y mostrar el modal
  contenedor.setAttribute("data-contenido-previo", tablaActual);
  contenedor.innerHTML = modalHTML;

  // Cargar los detalles del correo
  fetch(`modal.php?id=${id}`)
    .then(response => response.text())
    .then(data => {
      document.getElementById("detalleCorreo").innerHTML = data;
    });
}

function cerrarModal() {
  const contenedor = document.getElementById("contenido");
  const contenidoPrevio = contenedor.getAttribute("data-contenido-previo");
  contenedor.innerHTML = contenidoPrevio;
}

function redactar() {
  var contenedor;
  contenedor = document.getElementById("contenido");
  var ajax = new XMLHttpRequest();
  ajax.open("get", "redactar.html", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      contenedor.innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}

function enviar() {
  const contenido = document.getElementById("contenido");
  const formulario = document.getElementById("formulario");
  var parametros = new FormData(formulario);
  var ajax = new XMLHttpRequest();
  ajax.open("POST", "enviar.php", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      contenido.innerHTML = ajax.responseText;
    }
  };
  ajax.send(parametros);
}
