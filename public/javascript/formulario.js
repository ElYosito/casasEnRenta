// Obtén los botones por sus IDs
const btnCasa = document.getElementById("btnCasa");
const btnAlojamiento = document.getElementById("btnAlojamiento");
const btnUbica = document.getElementById("btnUbica");
const btnDatos = document.getElementById("btnDatos");
const btnServicios = document.getElementById("btnServicios");
const btnFoto = document.getElementById("btnFoto");
const btnPrecio = document.getElementById("btnPrecio");
const btnPublica = document.getElementById("btnPublica");

// Obtén los contenedores por sus IDs
const tipoCasa = document.getElementById("tipoCasa");
const tipoAlojamiento = document.getElementById("tipoAlojamiento");
const ubica = document.getElementById("ubica");
const datos = document.getElementById("datos");
const servicios = document.getElementById("servicios");
const foto = document.getElementById("foto");
const precio = document.getElementById("precio");
const publica = document.getElementById("publica");

// Obtén la barra de progreso
const progressBar = document.querySelector(".progress-bar");

// Inicializa el porcentaje actual
let currentPercentage = 0;

// Agrega un evento de clic a cada botón "Siguiente"
btnCasa.addEventListener("click", () => {
    tipoCasa.style.display = "none";
    tipoAlojamiento.style.display = "block";
    updateProgressBar(12.5); // Aumenta la barra de progreso en 12.5%
});

btnAlojamiento.addEventListener("click", () => {
    tipoAlojamiento.style.display = "none";
    ubica.style.display = "block";
    updateProgressBar(12.5);
});

btnUbica.addEventListener("click", () => {
    ubica.style.display = "none";
    datos.style.display = "block";
    updateProgressBar(12.5);
});

btnDatos.addEventListener("click", () => {
    datos.style.display = "none";
    servicios.style.display = "block";
    updateProgressBar(12.5);
});

btnServicios.addEventListener("click", () => {
    servicios.style.display = "none";
    foto.style.display = "block";
    updateProgressBar(12.5);
});

btnFoto.addEventListener("click", () => {
    foto.style.display = "none";
    precio.style.display = "block";
    updateProgressBar(12.5);
});

btnPrecio.addEventListener("click", () => {
    precio.style.display = "none";
    publica.style.display = "block";
    updateProgressBar(12.5);
});

btnPublica.addEventListener("click", () => {
    updateProgressBar(12.5);
});

// Función para actualizar la barra de progreso
function updateProgressBar(increment) {
    currentPercentage += increment;
    progressBar.style.width = currentPercentage + "%";
    progressBar.textContent = currentPercentage + "%";
}