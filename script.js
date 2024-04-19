document.addEventListener("DOMContentLoaded", function() {
    const botonAgregarHabilidad = document.getElementById("agregar-habilidad");
    const botoneliminarHabilidad = document.getElementById("eliminar-habilidad");
    const contenedorHabilidades = document.getElementById("con_habilidades");

    botonAgregarHabilidad.addEventListener("click", function() {
        const habilidadOriginal = document.querySelector(".habilidad");
        const nuevaHabilidad=document.createElement("input")
        nuevaHabilidad.setAttribute("type","text");
        nuevaHabilidad.setAttribute("id","habilidad");
        nuevaHabilidad.setAttribute("name","habilidad");
        nuevaHabilidad.setAttribute("maxlength","30");
        const label = document.createElement("label");
        const input = nuevaHabilidad.querySelector("input");
        label.textContent = "Habilidad";
        label.setAttribute("for", 'habilidad'); 
        contenedorHabilidades.appendChild(label);
        contenedorHabilidades.appendChild(nuevaHabilidad);
    });

    botoneliminarHabilidad.addEventListener("click", function(event) {
        const inputs = contenedorHabilidades.querySelectorAll("input");
    const labels = contenedorHabilidades.querySelectorAll("label");
        if (inputs.length > 0 && labels.length > 0) {
            // Eliminar el último input y el último label
            var t=contenedorHabilidades.childNodes;
            contenedorHabilidades.removeChild(t[t.length - 1])
            contenedorHabilidades.removeChild(t[t.length - 1]);
        } else {
            console.log("No hay inputs o labels para eliminar.");
        }
    });
});
