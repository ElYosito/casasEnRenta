@extends('plantillas.plantilla2')

@section('con2')
<div class="col-1">
    <a name="" id="" class="btn btn-outline-danger" href="/catalogo" role="button">Regresar</a>
</div>

<br>

<div style="height: 500px;" class="row">
    <div id="tipoCasa" class="container ">
        <h1 style="margin: 0px 0px 140px 0px;">Tipo de casa</h1>
        <div style="margin: 0px 0px 210px 0px;" class="d-flex justify-content-center align-items-center flex-fill">

            <input type="radio" class="btn-check" name="tipoCasa" id="option1" autocomplete="off">
            <label for="option1" class="btn btn-primary m-1">Casa
                <span class="icon"><i class="fa-solid fa-house"></i></span>
            </label>

            <input type="radio" class="btn-check" name="tipoCasa" id="option2" autocomplete="off">
            <label class="btn btn-primary m-1" for="option2">Departamento
                <span class="icon"><i class="fa-solid fa-building"></i></span>
            </label>

            <input type="radio" class="btn-check" name="tipoCasa" id="option3" autocomplete="off">
            <label class="btn btn-primary m-1" for="option3">Casa rodante
                <span class="icon"><i class="fa-solid fa-caravan"></i></span>
            </label>
        </div>
        <div class="d-flex justify-content-end align-items-end  ">
            <a name="" id="btnCasa" class="btn btn-primary next-button" href="#" role="button">Siguiente</a>
        </div>
    </div>

    <div id="tipoAlojamiento" style="max-width: 100%; display: none;" class="container">
        <h1 style="margin: 0px 0px 100px 0px;">Tipo de alojamiento</h1>
        <div class="d-flex justify-content-center align-items-center flex-fill">

            <input type="radio" class="btn-check" name="tipoA" id="option4" autocomplete="off">
            <label class="btn btn-primary m-1" for="option4">Alojamiento entero
                <span class="icon"><i class="fa-solid fa-caravan"></i></span>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Toda la casa</p>
                    </div>
                </div>
            </label>

            <input type="radio" class="btn-check" name="tipoA" id="option5" autocomplete="off">
            <label class="btn btn-primary m-1" for="option5">Una habitación
                <span class="icon"><i class="fa-solid fa-caravan"></i></span>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Solo una habitación</p>
                    </div>
                </div>
            </label>

        </div>
        <div style="margin: 0px 0px 210px 0px;" class="d-flex justify-content-end align-items-end">
            <a name="" id="btnAlojamiento" class="btn btn-primary next-button" href="#" role="button">Siguiente</a>
        </div>
    </div>

    <div id="ubica" style="max-width: 100%; display: none;" class="container">
        <h1>Donde se encuentra</h1>
        <a name="" id="btnUbica" class="btn btn-primary" href="#" role="button">Siguiente</a>
    </div>

    <div id="datos" style="max-width: 100%; display: none;" class="container">
        <h1>Datos basicos</h1>
        <a name="" id="btnDatos" class="btn btn-primary" href="#" role="button">Siguiente</a>
    </div>

    <div id="servicios" style="max-width: 100%; display: none;" class="container">
        <h1>Tu casa ofrece servicios?</h1>
        <a name="" id="btnServicios" class="btn btn-primary" href="#" role="button">Siguiente</a>
    </div>

    <div id="foto" style="max-width: 100%; display: none;" class="container">
        <h1>subir 5 fotos</h1>
        <a name="" id="btnFoto" class="btn btn-primary" href="#" role="button">Siguiente</a>
    </div>

    <div id="precio" style="max-width: 100%; display: none;" class="container">
        <h1>Agrega precio</h1>
        <a name="" id="btnPrecio" class="btn btn-primary" href="#" role="button">Siguiente</a>
    </div>

    <div id="publica" style="max-width: 100%; display: none;" class="container">
        <h1>Publicar casa</h1>
        <a name="" id="btnPublica" class="btn btn-primary" href="#" role="button">Publicar</a>
    </div>
</div>

<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar" style="width: 0%">0%</div>
</div>
<script>
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
</script>
<script src="{{ asset('javascript/formulario.js')}}"></script>
@endsection