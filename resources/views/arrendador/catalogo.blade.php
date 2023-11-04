@extends("plantillas.plantilla2")

@section('con2')
<div class="row row-cols-1 row-cols-md-6 g-4" id="propiedades-container">
    @foreach($propiedades as $propiedad)
    <div class="col propiedad" data-colonia-id="{{ $propiedad->colonia_id }}" data-edo-propiedad="{{ $propiedad->edoPropiedad }}">
        <div class="card">
            <div id="carousel{{ $propiedad->id }}" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel{{ $propiedad->id }}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel{{ $propiedad->id }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel{{ $propiedad->id }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/775720cd-cee0-44a3-aec1-6e135195ef57.jpeg?im_w=1200" class="d-block w-100" alt="..." loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/06d9c082-9475-466e-bc7f-735618c32659.jpeg?im_w=1440" class="d-block w-100" alt="..." loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/380b3d77-1a9e-423b-8f64-8189f124dccf.jpg?im_w=1440" class="d-block w-100" alt="..." loading="lazy">
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
            <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#myModal" href="#">
                <div class="card-body @if($propiedad->edoPropiedad === 'rentada') text-warning @elseif($propiedad->edoPropiedad === 'publicada') text-success @endif">
                    <h6 style="font-size: 21px;" class="card-title text-primary">{{$propiedad->titulo}}</h6>
                    <h6 class="card-text text-secondary">Habitaciones: {{$propiedad->habitaciones}}</h6>
                    <h6 class="card-text text-secondary">{{$propiedad->descripcion}}</h6>
                    <h6 class="card-text text-secondary">{{$propiedad->tipoPropiedad}}</h6>
                    <h6 class="card-text">{{$propiedad->edoPropiedad }}</h6>
                    <h6 class="card-title text-secondary">{{$propiedad->fechaPub}}</h6>
                    <h5 class="card-text text-dark"><strong>${{$propiedad->precio}} mxm al mes</strong></h5>
                </div>
            </a>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Título del Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Contenido del modal -->
                    <p>Aquí puedes colocar el contenido que desees mostrar en el modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Editar</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach



</div>

@endsection