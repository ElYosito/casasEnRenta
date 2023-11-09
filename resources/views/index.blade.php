@extends("plantillas.plantilla1")

@section("con1")
<style>
    .card .card-text {
        margin-bottom: 0;
        /* Personaliza el valor según tus necesidades */
    }
</style>
<br>
<form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<br>
<div class="d-flex justify-content-between">
    <h1>Encuentra tu nuevo hogar!!</h1>
    <a class="btn btn-danger" href="/favoritos">Favoritos</a>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4" id="propiedades-container">
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
                        <img src="{{ asset('storage/propiedades/' . $propiedad->id . '/imagen1.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/propiedades/' . $propiedad->id . '/imagen2.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/propiedades/' . $propiedad->id . '/imagen3.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
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

            <div class="card-body @if($propiedad->edoPropiedad === 'rentada') text-warning @elseif($propiedad->edoPropiedad === 'publicada') text-success @endif">
                <div class="d-flex justify-content-between">
                    <a style="text-decoration: none;" href="https://www.youtube.com/">
                        <h6 style="font-size: 21px;" class="card-title text-primary">{{$propiedad->titulo}}</h6>
                    </a>
                    <form action="{{ route('favoritos.store') }}" method="POST">
                        @csrf
                        <input type="text" name="propiedads_id" value="{{$propiedad->id}}" hidden>

                        <button class="{{ $favoritosPorPropiedad[$propiedad->id] ? 'text-success' : 'text-danger' }}" type="submit">
                            <i class="fas fa-heart"></i>
                        </button>

                        <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                    </form>
                </div>

                <h6 class="card-text text-secondary">Habitaciones: {{$propiedad->habitaciones}}</h6>
                <h6 class="card-text text-secondary">{{$propiedad->descripcion}}</h6>
                <h6 class="card-text text-secondary">{{$propiedad->tipoPropiedad}}</h6>
                <h6 class="card-text">{{$propiedad->edoPropiedad }}</h6>
                <h6 class="card-title text-secondary">{{$propiedad->fechaPub}}</h6>
                <h5 class="card-text text-dark"><strong>${{$propiedad->precio}} mxm al mes</strong></h5>
            </div>
        </div>
        <div id="alerta"></div>
    </div>
    @endforeach
</div>
<script src="{{ asset('javascript/select.js')}}"></script>

@endsection