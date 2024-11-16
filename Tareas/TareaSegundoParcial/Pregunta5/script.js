function mostrar() {
  var contenedor = document.getElementById("contenido");
  fetch("Pregunta5/datos.php")
    .then((response) => response.text())
    .then((data) => {
      objeto = JSON.parse(data);
      html = dibujar(objeto);
      contenedor.innerHTML = html;
    });
  function dibujar(objeto) {
    let html = `<div style="display: flex; flex-direction: column; gap: 10px;">`;
    html += "<select id='optitulo' onchange='cargarImagen()'>";
    for (let i = 0; i < objeto.length; i++) {
      html += `<option value="${i}">${objeto[i].titulo}</option>`;
    }
    html += "</select>";
    html +=
      `<div id="imag">` +
      `<img width="100px" src="images/${objeto[0].imagen}" alt="Imagen inicial"></img>` +
      `</div>`;
    html += `</div>`;
    return html;
  }
}

function cargarImagen() {
  let id = document.getElementById("optitulo").value;
  document.getElementById(
    "imag"
  ).innerHTML = `<img width="100px" src="images/${objeto[id].imagen}" alt="Imagen seleccionada"></img>`;
}