document.addEventListener("DOMContentLoaded", function() {
    const botonAgregarHabilidad = document.getElementById("agregar-habilidad");
    const contenedorHabilidades = document.getElementById("habilidades");

    botonAgregarHabilidad.addEventListener("click", function() {
        const habilidadOriginal = document.querySelector(".habilidad");
        const nuevaHabilidad = habilidadOriginal.cloneNode(true);
        nuevaHabilidad.querySelector("input").value = ""; // Limpiar el campo de habilidad clonado
        contenedorHabilidades.appendChild(nuevaHabilidad);
    });

    contenedorHabilidades.addEventListener("click", function(event) {
        if (event.target.classList.contains("eliminar-habilidad")) {
            event.target.parentElement.remove();
        }
    });
});
