function ejercicio2() {
  var ajax = new XMLHttpRequest();
  var contenido = document.getElementById("contenido");
  ajax.open("GET", `Pregunta2/tabla.html`, true);
  ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
          contenido.innerHTML = ajax.responseText;
          document.getElementById("btn-tabla").addEventListener("click", calcularTabla);
      }
  };
  ajax.send();
}

function calcularTabla() {
  const numero1 = parseInt(document.getElementById("numero1").value);
  const tabla = parseInt(document.getElementById("tabla").value);
  const resultado = document.getElementById("resultado");
  console.log(numero1, tabla, resultado);
  if (isNaN(numero1) || numero1 >= 10 || numero1 < 1) {
      alert("El primer número debe ser menor a 10 y mayor a 0");
      return;
  }
  if (isNaN(tabla) || tabla <= 1) {
      alert("El número de la tabla debe ser mayor a 1");
      return;
  }

  const operaciones = document.getElementsByName("operacion");
  let operacionSeleccionada = "";
  for (let op of operaciones) {
      if (op.checked) {
          operacionSeleccionada = op.value;
          break;
      }
  }

  let contenidoTabla = "";
  for (let i = 1; i <= tabla; i++) {
      let resultadoOperacion;
      switch(operacionSeleccionada) {
          case "suma":
              resultadoOperacion = i + numero1;
              contenidoTabla += `${i} + ${numero1} = ${resultadoOperacion}<br>`;
              break;
          case "resta":
              resultadoOperacion = (i+numero1) - numero1;
              contenidoTabla += `${(i+numero1)} - ${numero1} = ${resultadoOperacion}<br>`;
              break;
          case "multiplicacion":
              resultadoOperacion = i * numero1;
              contenidoTabla += `${i} × ${numero1} = ${resultadoOperacion}<br>`;
              break;
          case "division":
              resultadoOperacion = ((i*numero1) / numero1).toFixed(2);
              contenidoTabla += `${(i*numero1)} ÷ ${numero1} = ${resultadoOperacion}<br>`;
              break;
      }
  }

  resultado.innerHTML = contenidoTabla;
}