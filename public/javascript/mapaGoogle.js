function initMap() {
    // Coordenadas iniciales del mapa
    var initialLatLng = {
        lat: 28.6911819,
        lng: -100.6275652
    };

    // Crear un mapa
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: initialLatLng
    });

    // Agregar un marcador (puede ser movible para seleccionar la ubicación)
    var marker = new google.maps.Marker({
        position: initialLatLng,
        map: map,
        draggable: true
    });

    // Obtener las coordenadas del marcador cuando se suelta (onDragEnd)
    google.maps.event.addListener(marker, 'dragend', function (event) {
        var lat = event.latLng.lat();
        var lng = event.latLng.lng();

        // Actualiza el campo oculto "ubicacion" como un objeto JSON
        document.getElementById('ubicacion').value = JSON.stringify({ latitud: lat, longitud: lng });
    });
}