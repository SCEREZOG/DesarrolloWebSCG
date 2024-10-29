function cargarContenido(abrir) {
  var contenedor = document.getElementById("contenido");
  fetch(abrir)
    .then(response => response.text())
    .then(data => (contenedor.innerHTML = data));
}

cargarContenido("calendario.php?mes=1&anio=2020");

function cambiar() {
  mes = document.getElementById("mes").value;
  anio = document.getElementById("anio").value;
  cargarContenido(`calendario.php?mes=${mes}&anio=${anio}`);
}
