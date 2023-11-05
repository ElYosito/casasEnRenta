$(document).ready(function() {
    var fechaActual = obtenerFechaActual();
    $("#fechaPub").val(fechaActual);
});

function obtenerFechaActual() {
    var now = new Date();
    var year = now.getFullYear();
    var month = (now.getMonth() + 1).toString().padStart(2, '0');
    var day = now.getDate().toString().padStart(2, '0');
    return year + '-' + month + '-' + day;
}
