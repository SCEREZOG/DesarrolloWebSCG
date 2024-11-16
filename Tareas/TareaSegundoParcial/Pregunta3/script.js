function ejercicio3() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "Pregunta3/verificar_sesion.php", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      if (ajax.responseText === "logueado") {
        cargarTablaUsuarios();
      } else {
        mostrarLogin();
      }
    }
  };
  ajax.send();
}

function cargarTablaUsuarios() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "Pregunta3/listar.php", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      document.getElementById("contenido").innerHTML = ajax.responseText;
      var botonesOperacion = document.getElementsByClassName("btn-cambiar");
      for (var i = 0; i < botonesOperacion.length; i++) {
        botonesOperacion[i].addEventListener("click", cambiarNivel);
      }
    }
  };
  ajax.send();
}

function cambiarNivel(e) {
  var correo = e.target.getAttribute("data-correo");
  var nuevoNivel = e.target.getAttribute("data-nuevo-nivel");

  var ajax = new XMLHttpRequest();
  ajax.open("POST", "Pregunta3/cambiar_nivel.php", true);
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      if (ajax.responseText === "success") {
        cargarTablaUsuarios();
      } else {
        alert("Error al cambiar el nivel");
      }
    }
  };
  ajax.send("correo=" + correo + "&nivel=" + nuevoNivel);
}

function mostrarLogin() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "Pregunta3/login.html", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      document.getElementById("contenido").innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}

function iniciarSesion() {
  var correo = document.getElementById("correo").value;
  var password = document.getElementById("password").value;

  var ajax = new XMLHttpRequest();
  ajax.open("POST", "Pregunta3/login.php", true);
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
        console.log(ajax.responseText);
      if (ajax.responseText === "success") {
        cargarTablaUsuarios();
      } else {
        alert("Error en el inicio de sesión");
      }
    }
  };
  ajax.send(
    "correo=" +
      encodeURIComponent(correo) +
      "&password=" +
      encodeURIComponent(password)
  );
}

function cerrarSesion() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "Pregunta3/logout.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            if (ajax.responseText === "success") {
                // Mostrar el formulario de login
                mostrarLogin();
            }
        }
    };
    ajax.send();
}