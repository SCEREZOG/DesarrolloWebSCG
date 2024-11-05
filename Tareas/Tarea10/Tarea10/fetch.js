function cargarProvincias() {
    var contenedor;
    var iddepartamento = document.getElementById('departamento').value;
    if (!iddepartamento) {
        console.error("Por favor, selecciona un departamento.");
        return;
    }

    contenedor = document.getElementById('provincia');
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `opciones_provincia.php?iddepartamento=${iddepartamento}`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            contenedor.innerHTML = ajax.responseText;
        }
    };

    
    ajax.send();
}
