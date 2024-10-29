function cargarContenido(abrir) {
  var contenedor = document.getElementById("contenido");
  var ajax = new XMLHttpRequest();
  ajax.open("GET", abrir, true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState === 4 && ajax.status === 200) {
      contenedor.innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}

cargarContenido("calendario.php?mes=1&anio=2020");

function cambiar() {
  var mes = document.getElementById("mes").value;
  var anio = document.getElementById("anio").value;
  cargarContenido(`calendario.php?mes=${mes}&anio=${anio}`);
}
