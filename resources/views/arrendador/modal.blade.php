<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>STAYCS - {{ $propiedad->titulo }}</title>
</head>

<body>
    <div class="col-1">
        <a name="" id="" class="btn btn-outline-danger" href="/catalogo" role="button">Regresar</a>
    </div>
    <h4 class="title">{{$propiedad->titulo}}</h4>
    <button type="button" class="close" data-bs-dismiss='modal' aria-label="close" data-bs-backdrop="static">
        <span aria-hidden="true">&times;</span>
    </button>


    <div id="carousel{{ $propiedad->id }}" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel{{ $propiedad->id }}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel{{ $propiedad->id }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel{{ $propiedad->id }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carousel{{ $propiedad->id }}" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carousel{{ $propiedad->id }}" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/propiedades/' . $propiedad->id . '/imagen1.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/propiedades/' . $propiedad->id . '/imagen2.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/propiedades/' . $propiedad->id . '/imagen3.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/propiedades/' . $propiedad->id . '/imagen4.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/propiedades/' . $propiedad->id . '/imagen5.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $propiedad->id }}" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $propiedad->id }}" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="@if($propiedad->edoPropiedad === 'rentada') text-warning @elseif($propiedad->edoPropiedad === 'publicada') text-success @endif">
        <h6 class="card-text text-secondary">{{$propiedad->descripcion}}</h6>
        <h6 class="card-text ">{{$propiedad->fechaPub}}</h6>
        <h6 class="card-text text-secondary">Habitaciones: {{$propiedad->habitaciones}}</h6>
        <h6 class="card-text text-secondary">Tipo de casa: {{$propiedad->tipoCasa }}</h6>
        <h6 class="card-title text-secondary">Tipo de alojamiento: {{$propiedad->tipoA}}</h6>
        <h6 class="card-title text-secondary">prefencia de inquilinos: {{$propiedad->tipoPropiedad}}</h6>
        <br>
        <h5>Servicios que ofrece la propiedad</h5>
        <div style="font-size: 20px;" class="container d-flex justify-content-center">
            <div class="col-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="wifi" id="wifi" @if(in_array('wifi', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif {{ $readonlyInput ? 'disabled':''}}>
                    <label class="form-check-label" for="wifi">Wifi <span><i class="fa-solid fa-wifi"></i></span></label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="tv" id="tv" @if(in_array('tv', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif {{ $readonlyInput ? 'disabled':''}}>
                    <label class="form-check-label" for="tv">TV <span><i class="fa-solid fa-tv"></i></span></label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="gas" id="gas" @if(in_array('gas', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif {{ $readonlyInput ? 'disabled':''}}>
                    <label class="form-check-label" for="gas">Gas <span><i class="fa-solid fa-fire-flame-simple"></i></span></label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="luz" id="luz" @if(in_array('luz', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif {{ $readonlyInput ? 'disabled':''}}>
                    <label class="form-check-label" for="luz">Luz <span><i class="fa-solid fa-bolt-lightning"></i></span></label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="agua" id="wifi" @if(in_array('agua', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif {{ $readonlyInput ? 'disabled':''}}>
                    <label class="form-check-label" for="agua">Agua <span><i class="fa-solid fa-shower"></i></span></label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="aire_acondicionado" id="aire_acondicionado" @if(in_array('aire_acondicionado', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif {{ $readonlyInput ? 'disabled':''}}>
                    <label class="form-check-label" for="aire_acondicionado">Clima <span><i class="fa-solid fa-wind"></i></span></label>
                </div>
            </div>
        </div>
        <br>
        <h6 class="card-title text-secondary">Estado: {{$propiedad->edoPropiedad}}</h6>
        <h5 class="card-text text-dark"><strong>${{$propiedad->precio}} mxm al mes</strong></h5>
    </div>

    <div id="map" style="width: 100%; height: 350px; margin: 0px 0px 10px 0px;"></div>

    <a type="button" class="btn btn-primary" href="{{ route('propiedad.edit',['propiedad'=>$propiedad->id]) }}">Editar</a>
</body>

</html>

<script>
    function initMap() {
        // Coordenadas iniciales del mapa
        var jsonPropiedad = <?php echo json_encode($propiedad->ubicacion); ?>;

        // Analizar el JSON
        var coordenadas = JSON.parse(jsonPropiedad);

        // Extraer latitud y longitud como números
        var latitud = parseFloat(coordenadas.lat);
        var longitud = parseFloat(coordenadas.lng);

        // Crear un mapa
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: {
                lat: latitud,
                lng: longitud
            } // Usar latitud y longitud como centro
        });

        // Agregar un marcador en las mismas coordenadas
        var marker = new google.maps.Marker({
            position: {
                lat: latitud,
                lng: longitud
            }, // Usar latitud y longitud como posición
            map: map
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=initMap"></script>