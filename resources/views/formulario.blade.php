@extends('plantillas.plantilla2')

@section('con2')
<div class="col-1">
    <a name="" id="" class="btn btn-outline-danger" href="/catalogo" role="button">Regresar</a>
</div>

<br>
@if(isset($propiedad->id))
<form action="{{ route('propiedad.update',['propiedad'=>$propiedad->id]) }}" method="POST" enctype="multipart/form-data">
    @else
    <form action="{{ route('propiedad.store') }}" method="POST" enctype="multipart/form-data">
        @endif
        @csrf
        <div style="height: 450px;" class="row">
            <div id="datos" style="max-width: 100%;" class="container">
                <h1>Datos basicos</h1>
                <div>
                    <div style="margin: 0px 0px 40px 0px; font-size: 20px;" class="container">
                        <div class="mb-3 row">
                            <label for="titulo" class="col-form-label">Nombre de la propiedad:</label>
                            <div class="col-12">
                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Nombre" value="{{ old('titulo',$propiedad->titulo??'')}}">

                            </div>
                        </div>

                        <div class="mb-3 row justify-content-center ">
                            <label for="descripcion" class="text-center">Descripción:</label>
                            <div class="col-12">
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ old('descripcion', $propiedad->descripcion ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3 row justify-content-between ">
                            <div class="col-2">
                                <label for="habitaciones" class="col-form-label">Habitaciones:</label>
                                <input type="number" class="form-control" name="habitaciones" id="habitaciones" placeholder="Número de habitaciones" value="{{ old('habitaciones',$propiedad->habitaciones??'')}}">
                            </div>

                            <div class="col-2">
                                <label for="" class="col-form-label">Fecha de publicación:</label>
                                <input type="date" class="form-control" name="fechaPub" id="fechaPub" readonly>
                            </div>

                            <input type="text" style="display: none;" name="edoPropiedad" id="edoPropiedad" value="publicada">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end ">
                        <a name="" id="btnDatos" class="btn btn-success" href="#" role="button"> Siguiente</a>
                    </div>

                </div>
            </div>

            <div id="tipoCasa" style="display: none;" class="container">
                <h1 style="margin: 0px 0px 100px 0px;">Tipo de casa:</h1>
                <div style="margin: 0px 0px 210px 0px;" class="d-flex justify-content-center align-items-center flex-fill">

                    <input type="radio" class="btn-check" name="tipoCasa" id="casa" value="Casa" autocomplete="off" @if(old('tipoCasa', $propiedad->tipoCasa) === 'Casa') checked @endif>
                    <label for="casa" class="btn btn-primary m-1">Casa
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                    </label>

                    <input type="radio" class="btn-check" name="tipoCasa" id="departamento" value="Departamento" autocomplete="off" @if(old('tipoCasa', $propiedad->tipoCasa) === 'Departamento') checked @endif>
                    <label class="btn btn-primary m-1" for="departamento">Departamento
                        <span class="icon"><i class="fa-solid fa-building"></i></span>
                    </label>

                    <input type="radio" class="btn-check" name="tipoCasa" id="casaRodante" value="Casa rodante" autocomplete="off" @if(old('tipoCasa', $propiedad->tipoCasa) === 'Casa rodante') checked @endif>
                    <label class="btn btn-primary m-1" for="casaRodante">Casa rodante
                        <span class="icon"><i class="fa-solid fa-caravan"></i></span>
                    </label>
                </div>
                <div class="d-flex justify-content-between">
                    <a name="" id="btnRetrocederCasa" class="btn btn-danger next-button" href="#" role="button"> atras </a>
                    <a name="" id="btnCasa" class="btn btn-success next-button" href="#" role="button"> Siguiente </a>
                </div>
            </div>

            <div id="tipoAlojamiento" style="max-width: 100%; display: none;" class="container">
                <h1 style="margin: 0px 0px 100px 0px;">Tipo de alojamiento</h1>
                <div style="margin: 0px 0px 150px 0px;" class="d-flex justify-content-center align-items-center flex-fill">

                    <input type="radio" class="btn-check" name="tipoA" id="entero" value="entero" autocomplete="off" @if(old('tipoA', $propiedad->tipoA) === 'entero') checked @endif>
                    <label class="btn btn-primary m-1" for="entero">Alojamiento entero
                        <span class="icon"><i class="fa-solid fa-caravan"></i></span>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text">Toda la casa</p>
                            </div>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="tipoA" id="unaHabitacion" value="unaHabitacion" autocomplete="off" @if(old('tipoA', $propiedad->tipoA) === 'unaHabitacion') checked @endif>
                    <label class="btn btn-primary m-1" for="unaHabitacion">Una habitación
                        <span class="icon"><i class="fa-solid fa-caravan"></i></span>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text">Solo una habitación</p>
                            </div>
                        </div>
                    </label>

                </div>
                <div class="d-flex justify-content-between ">
                    <a name="" id="btnRetrocederAlojamiento" class="btn btn-danger next-button" href="#" role="button"> Atrás</a>
                    <a name="" id="btnAlojamiento" class="btn btn-success next-button" href="#" role="button"> Siguiente </a>
                </div>
            </div>

            <div id="propiedad" style="max-width: 100%; display: none;" class="container">
                <h1 style="margin: 0px 0px 100px 0px;">¿A quien va dirigida tu casa?</h1>
                <div style="margin: 0px 0px 200px 0px;" class="d-flex justify-content-center align-items-center flex-fill">

                    <input type="radio" class="btn-check" name="tipoPropiedad" id="estudiantes" value="Estudiantes" autocomplete="off" @if(old('tipoPropiedad', $propiedad->tipoPropiedad) === 'Estudiantes') checked @endif>
                    <label for="estudiantes" class="btn btn-primary m-1">Estudiantes
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                    </label>

                    <input type="radio" class="btn-check" name="tipoPropiedad" id="trabajadores" value="Trabajadores" autocomplete="off" @if(old('tipoPropiedad', $propiedad->tipoPropiedad) === 'Trabajadores') checked @endif>
                    <label class="btn btn-primary m-1" for="trabajadores">Trabajadores
                        <span class="icon"><i class="fa-solid fa-building"></i></span>
                    </label>

                    <input type="radio" class="btn-check" name="tipoPropiedad" id="general" value="general" autocomplete="off" @if(old('tipoPropiedad', $propiedad->tipoPropiedad) === 'general') checked @endif>
                    <label class="btn btn-primary m-1" for="general">Publico en general
                        <span class="icon"><i class="fa-solid fa-caravan"></i></span>
                    </label>
                </div>
                <div class="d-flex justify-content-between ">
                    <a name="" id="btnRetrocederpropiedad" class="btn btn-danger next-button" href="#" role="button">Atrás</a>
                    <a name="" id="btnpropiedad" class="btn btn-success" href="#" role="button">Siguiente</a>
                </div>

            </div>

            <div id="ubica" style="max-width: 100%; display: none;" class="container">
                <h1>ubicacion</h1>

                <div id="map" style="width: 100%; height: 350px; margin: 0px 0px 10px 0px;"></div>

                <input type="hidden" name="ubicacion" id="ubicacion" value="{{ $propiedad->ubicacion }}">

                <div class="d-flex justify-content-between ">
                    <a name="" id="btnRetrocederUbica" class="btn btn-danger next-button" href="#" role="button">Atrás</a>
                    <a name="" id="btnUbica" class="btn btn-success" href="#" role="button">Siguiente</a>
                </div>
            </div>

            <div id="servicios" style="max-width: 100%; display: none;" class="container">
                <h1 style="margin: 0px 0px 100px 0px;">Selecciona los servicios que ofrece tu casa</h1>
                <div style="font-size: 25px; margin: 0px 0px 90px 0px;" class="container d-flex justify-content-center">
                    <div class="col-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="wifi" id="wifi" @if(in_array('wifi', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif>
                            <label class="form-check-label" for="wifi">Wifi <span><i class="fa-solid fa-wifi"></i></span></label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="tv" id="tv" @if(in_array('tv', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif>
                            <label class="form-check-label" for="tv">TV <span><i class="fa-solid fa-tv"></i></span></label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="gas" id="gas" @if(in_array('gas', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif>
                            <label class="form-check-label" for="gas">Gas <span><i class="fa-solid fa-fire-flame-simple"></i></span></label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="luz" id="luz" @if(in_array('luz', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif>
                            <label class="form-check-label" for="luz">Luz <span><i class="fa-solid fa-bolt-lightning"></i></span></label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="agua" id="wifi" @if(in_array('agua', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif>
                            <label class="form-check-label" for="agua">Agua <span><i class="fa-solid fa-shower"></i></span></label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="servicios[]" value="aire_acondicionado" id="aire_acondicionado" @if(in_array('aire_acondicionado', old('servicios', json_decode($propiedad->servicios, true) ?? []))) checked @endif>
                            <label class="form-check-label" for="aire_acondicionado">Aire acondicionado <span><i class="fa-solid fa-wind"></i></span></label>
                        </div>
                    </div>
                </div>



                <div class="d-flex justify-content-between">
                    <a name="" id="btnRetrocederServicios" class="btn btn-danger next-button" href="#" role="button">Atrás</a>
                    <a name="" id="btnServicios" class="btn btn-success" href="#" role="button">Siguiente</a>
                </div>

            </div>

            <div id="publicar" style="max-width: 100%; display: none;" class="container">
                <h1 style="margin: 0px 0px 100px 0px;">Agrega imagenes de tu casa</h1>
                <div class="container">
                    <div style="margin: 0px 0px 100px 0px;" class="d-flex justify-content-center align-items-center flex-column">
                        <div style="font-size: 25px;" class="mb-3 row">
                            <label for="precio" class="col-form-label d-flex justify-content-center ">Precio:</label>
                            <input type="number" class="form-control" name="precio" id="precio" placeholder="$" value="{{ old('precio',$propiedad->precio??'')}}">
                        </div>

                        <div class="mb-3 row">
                            <label for="images"></label>
                            <input type="file" name="images[]" class="form-control-file btn btn-danger" multiple>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a name="" id="btnRetrocederPublicar" class="btn btn-danger next-button" href="#" role="button">Atrás</a>
                    <button type="submit" id="btnPublica" class="btn btn-success">Publicar</button>
                </div>
            </div>
        </div>
    </form>


    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar" style="width: 0%">0%</div>
    </div>
    @if(isset($propiedad->id))
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

            var marker = new google.maps.Marker({
                position: {
                    lat: latitud,
                    lng: longitud
                }, // Usar latitud y longitud como posición
                map: map,
                draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function(event) {
                var lat = event.latLng.lat();
                var lng = event.latLng.lng();

                // Actualiza el campo oculto "ubicacion" como un objeto JSON
                document.getElementById('ubicacion').value = JSON.stringify({
                    lat,
                    lng
                });
            });
        }
    </script>
    @else
    <script src="{{ asset('javascript/mapaGoogle.js')}}"></script>
    @endif
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=initMap"></script>
    <script src="{{ asset('javascript/formulario.js')}}"></script>
    <script src="{{ asset('javascript/check.js')}}"></script>
    <script src="{{ asset('javascript/date.js')}}"></script>

    @endsection