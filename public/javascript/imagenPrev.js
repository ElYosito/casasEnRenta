// Obtén una referencia a los campos de entrada de archivo y las imágenes de vista previa
const imagenInput1 = document.getElementById("imagenInput1");
const imagenInput2 = document.getElementById("imagenInput2");
const imagenInput3 = document.getElementById("imagenInput3");
const imagenInput4 = document.getElementById("imagenInput4");
const imagenInput5 = document.getElementById("imagenInput5");

const imagenPreviews = [
    document.getElementById("imagenPreview1"),
    document.getElementById("imagenPreview2"),
    document.getElementById("imagenPreview3"),
    document.getElementById("imagenPreview4"),
    document.getElementById("imagenPreview5")
];

// Agrega un evento de cambio a cada campo de entrada de archivo
imagenInput1.addEventListener("change", createImagePreview(0));
imagenInput2.addEventListener("change", createImagePreview(1));
imagenInput3.addEventListener("change", createImagePreview(2));
imagenInput4.addEventListener("change", createImagePreview(3));
imagenInput5.addEventListener("change", createImagePreview(4));

// Función para crear vistas previas de imágenes
function createImagePreview(index) {
    return function() {
        const input = this;
        const reader = new FileReader();

        // Verifica si se seleccionó un archivo
        if (input.files && input.files[0]) {
            reader.onload = function(e) {
                imagenPreviews[index].src = e.target.result;
                imagenPreviews[index].style.display = "block";
            };

            // Lee el archivo seleccionado como una URL de datos
            reader.readAsDataURL(input.files[0]);
        }
    };
}