//BOTON SIGUIENTE
// Obtén los botones por sus IDs
const btnCasa = document.getElementById("btnCasa");
const btnAlojamiento = document.getElementById("btnAlojamiento");
const btnUbica = document.getElementById("btnUbica");
const btnDatos = document.getElementById("btnDatos");
const btnServicios = document.getElementById("btnServicios");
const btnPublica = document.getElementById("btnPublica");
const btnpropiedad = document.getElementById("btnpropiedad");

// Obtén los botones de retroceso por sus IDs
const btnRetrocederAlojamiento = document.getElementById("btnRetrocederAlojamiento");
const btnRetrocederUbica = document.getElementById("btnRetrocederUbica");
const btnRetrocederCasa = document.getElementById("btnRetrocederCasa");
const btnRetrocederServicios = document.getElementById("btnRetrocederServicios");
const btnRetrocederPublicar = document.getElementById("btnRetrocederPublicar");
const btnRetrocederpropiedad = document.getElementById("btnRetrocederpropiedad");

// Obtén los contenedores por sus IDs
const tipoCasa = document.getElementById("tipoCasa");
const tipoAlojamiento = document.getElementById("tipoAlojamiento");
const ubica = document.getElementById("ubica");
const datos = document.getElementById("datos");
const servicios = document.getElementById("servicios");
const publicar = document.getElementById("publicar");
const propiedad = document.getElementById("propiedad");

// Obtén la barra de progreso
const progressBar = document.querySelector(".progress-bar");

// Inicializa el porcentaje actual
let currentPercentage = 0;

// Agrega un evento de clic a cada botón "Siguiente"
btnDatos.addEventListener("click", () => {
    datos.style.display = "none";
    tipoCasa.style.display = "block";
    updateProgressBar(15);
});

btnCasa.addEventListener("click", () => {
    tipoCasa.style.display = "none";
    tipoAlojamiento.style.display = "block";
    updateProgressBar(14); // Aumenta la barra de progreso en 12.5%
});

btnRetrocederCasa.addEventListener("click",()=>{
    tipoCasa.style.display = "none";
    datos.style.display = "block";
    updateProgressBar(-29)
});

btnAlojamiento.addEventListener("click", () => {
    tipoAlojamiento.style.display = "none";
    propiedad.style.display = "block";
    updateProgressBar(14);
});

btnRetrocederAlojamiento.addEventListener("click", () => {
    tipoAlojamiento.style.display = "none";
    tipoCasa.style.display = "block";
    updateProgressBar(-14);
});

btnpropiedad.addEventListener("click", () => {
    propiedad.style.display = "none";
    ubica.style.display = "block";
    updateProgressBar(14);
});

btnRetrocederpropiedad.addEventListener("click", () => {
    propiedad.style.display = "none";
    tipoAlojamiento.style.display = "block";
    updateProgressBar(-14);
});

btnUbica.addEventListener("click", () => {
    ubica.style.display = "none";
    servicios.style.display = "block";
    updateProgressBar(14);
});

btnRetrocederUbica.addEventListener("click", () => {
    ubica.style.display = "none";
    propiedad.style.display = "block";
    updateProgressBar(-14);
});

btnServicios.addEventListener("click", () => {
    servicios.style.display = "none";
    publicar.style.display = "block";
    updateProgressBar(14);
});

btnRetrocederServicios.addEventListener("click", () => {
    servicios.style.display = "none";
    ubica.style.display = "block";
    updateProgressBar(-14);
});

btnRetrocederPublicar.addEventListener("click", () => {
    publicar.style.display = "none";
    servicios.style.display = "block";
    updateProgressBar(-15);
});

btnPublica.addEventListener("click", () => {
    updateProgressBar(15);
});


// Función para actualizar la barra de progreso
function updateProgressBar(increment) {
    currentPercentage += increment;
    if (currentPercentage < 0) {
        currentPercentage = 0;
    }
    progressBar.style.width = currentPercentage + "%";
    progressBar.textContent = currentPercentage + "%";
}