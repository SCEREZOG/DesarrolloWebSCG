function listar(parametros) {
  var contenido = document.getElementById("contenido");
  const ajax = new XMLHttpRequest();
  if (parametros) {
    ajax.open("get", `Pregunta4/listar.php?` + parametros, true);
  } else {
    ajax.open("get", `Pregunta4/listar.php`, true);
  }
  ajax.onreadystatechange = () => {
    if (ajax.readyState == 4) {
      contenido.innerHTML = ajax.responseText;
    }
  };
  ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //es la cabecera del objeto ajax  de tipo texto o html
  ajax.send();
}
function ordenar(orden) {
  var contenedor;
  contenedor = document.getElementById("contenido");

  ajax = new XMLHttpRequest();
  ajax.open("GET", `Pregunta4/listar.php?ordenar=` + orden, true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      contenedor.innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}
