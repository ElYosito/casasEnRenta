function filtrarPropiedades() {
    var selectElement = document.getElementById('select');
    var coloniaId = selectElement.value;
    var propiedades = document.querySelectorAll('.propiedad');

    // Si se selecciona la opción vacía, muestra todas las propiedades excepto las "eliminadas"
    if (coloniaId === "") {
        propiedades.forEach(function (propiedad) {
            if (propiedad.getAttribute('data-edo-propiedad') === 'eliminada') {
                propiedad.style.display = 'none'; // Ocultar propiedades eliminadas
            } else {
                propiedad.style.display = 'block';
            }
        });
        return;
    }

    // Oculta todas las propiedades
    propiedades.forEach(function (propiedad) {
        propiedad.style.display = 'none';
    });

    // Muestra solo las propiedades que coinciden con el colonia_id seleccionado y no son "eliminadas"
    propiedades.forEach(function (propiedad) {
        if (
            propiedad.getAttribute('data-colonia-id') === coloniaId &&
            propiedad.getAttribute('data-edo-propiedad') !== 'eliminada'
        ) {
            propiedad.style.display = 'block';
        }
    });
}