$(document).ready(function() {
    // Cuando se hace check en uno de los radio buttons
    $('input[type="radio"]').change(function() {
        // Obtener el label asociado al radio button seleccionado
        var label = $(this).next('label');

        // Quitar cualquier clase de color existente en los labels
        $('label').removeClass('btn-success').addClass('btn-primary');

        // Cambiar la clase del label al color 'success'
        label.removeClass('btn-primary').addClass('btn-success');
    });
});