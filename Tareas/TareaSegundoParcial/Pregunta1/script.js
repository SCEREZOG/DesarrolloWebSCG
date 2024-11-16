function ejercicio1() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", `Pregunta1/tresenraya.html`, true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      document.getElementById("contenido").innerHTML = ajax.responseText;
      asignarEventosCuadros();
    }
  };
  ajax.send();
}

function asignarEventosCuadros() {
  const contenedor = document.getElementById("content-ejercicio1");
  let turno = "X";
  const turnoX = document.getElementById("turnoX");

  contenedor.addEventListener("click", e => {
    if (e.target.id == "cuadro" && e.target.innerHTML == "") {
      e.target.innerHTML = turno;
      if (turno == "X") {
        turno = "O";
      } else {
        turno = "X";
      }
      turnoX.innerHTML = `Turno ${turno}`;
    }
  });
}
