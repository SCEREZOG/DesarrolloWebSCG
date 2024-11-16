//////////// ejercicio 1 ////////////
function botones() {
  document.getElementById("mensaje").innerText =
    "Soledad Cerezo Guzmán - 35-5130";
  var menu = document.getElementById("menu");
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "botones.html", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState === 4) {
      menu.innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}

///////////// ejercicio 2 /////////////
function cargarGaleria() {
  fetch("galeria.php")
    .then(response => response.text())
    .then(data => {
      document.getElementById("principal").innerHTML = data;
    })
    .catch(error => {
      console.error("Error al cargar la galería:", error);
    });
}

function abrirModal(imagen) {
  const principal = document.getElementById("principal");
  principal.style.position = "relative";

  const modalHtml = `
    <div id="modal" style="display: flex; position: absolute; inset: 0; background-color: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index: 1000; ">
      <div style="background: white; padding: 20px; border-radius: 10px; text-align: center; width: 80%; max-height: 90%; ">
        <img id="modal-img" src="${imagen}" style="max-width: 30%; max-height: 70vh; object-fit: contain; " />
        <br />
        <button onclick="cerrarModal()" style="margin-top: 20px; padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer;">
          Aceptar
        </button>
      </div>
    </div>
  `;
  principal.innerHTML += modalHtml;
}

function cerrarModal() {
  const modal = document.getElementById("modal");
  modal.style.display = "none";
  modal.remove();
}

///////////// ejercicio 3 /////////////
function ejercicio3() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", `formulario.php`, true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      document.getElementById("principal").innerHTML = ajax.responseText;
      asignarEventoFormulario(); // Asignar evento al formulario
    }
  };
  ajax.send();
}

function insertarLibro() {
  var formulario = document.getElementById("form_libro");
  var parametros = new FormData(formulario);

  var ajax = new XMLHttpRequest();
  ajax.open("POST", "guardarlibro.php", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      if (ajax.status == 200) {
        if (ajax.responseText.trim() === "success") {
          cargarGaleria();
        } else {
          alert("Error al guardar el libro: " + ajax.responseText);
        }
      } else {
        alert("Error en la comunicación con el servidor.");
      }
    }
  };

  ajax.send(parametros);
}

///////////// ejercicio 4 /////////////
function cargarListado() {
  fetch("listar.php")
    .then(response => response.text())
    .then(data => {
      document.getElementById("principal").innerHTML = data;
    })
    .catch(error => console.error("Error:", error));
}

function filtrarCarrera() {
  let carrera = document.getElementById("selectCarrera").value;
  let formData = new FormData();
  formData.append("carrera", carrera);
  fetch("filtrar.php", {
    method: "POST",
    body: formData,
  })
    .then(response => response.text())
    .then(data => {
      document.getElementById("tablaLibros").innerHTML = data;
      console.log("Respuesta recibida:", data);
    })
    .catch(error => console.error("Error:", error));
}

////////////// Ejercicio 5 //////////////
function mostrar() {
  fetch("listacolores.html")
    .then(response => response.text())
    .then(data => {
      document.getElementById("principal").innerHTML = data;
    })
    .catch(error => console.error("Error:", error));
}

function agregarCuadrado() {
  const color = document.getElementById("color");
  const grilla = document.getElementById("grilla");

  const cuadrado = document.createElement("div");
  cuadrado.className = "cuadrado";
  cuadrado.style.backgroundColor = color.value;

  cuadrado.addEventListener("click", function () {
    const enlaces = document.querySelectorAll(".boton");
    enlaces.forEach(enlace => {
      enlace.style.backgroundColor = this.style.backgroundColor;
    });
  });

  grilla.appendChild(cuadrado);
}
