@extends("plantillas.plantilla1")

@section("con1")
<div class="d-flex justify-content-between">
    <h1>Favoritos!!</h1>
    <a class="btn btn-danger" href="/">atras</a>
</div>

<div class="row row-cols-1 row-cols-md-6 g-4" id="propiedades-container">
    @foreach($favorito as $fav)
    <div class="col propiedad" data-edo-propiedad="{{ $fav->propiedads->edoPropiedad }}">
        <div class="card">
            <div id="carousel{{ $fav->propiedads->id }}" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel{{ $fav->propiedads->id }}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel{{ $fav->propiedads->id }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel{{ $fav->propiedads->id }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/propiedades/' . $fav->propiedads->id . '/imagen1.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/propiedades/' . $fav->propiedads->id . '/imagen2.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/propiedades/' . $fav->propiedads->id . '/imagen3.jpg') }}" class="d-block w-100" alt="..." loading="lazy">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $fav->propiedads->id }}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $fav->propiedads->id }}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="card-body @if($fav->propiedads->edoPropiedad === 'rentada') text-warning @elseif($fav->propiedads->edoPropiedad === 'publicada') text-success @endif">
                <div class="d-flex justify-content-between">
                    <a style="text-decoration: none;" href="https://www.youtube.com/">
                        <h6 style="font-size: 21px;" class="card-title text-primary">{{$fav->propiedads->titulo}}</h6>
                    </a>
                    <button class="btn btn-succes">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>

                <h6 class="card-text text-secondary">Habitaciones: {{$fav->propiedads->habitaciones}}</h6>
                <h6 class="card-text text-secondary">{{$fav->propiedads->descripcion}}</h6>
                <h6 class="card-text text-secondary">{{$fav->propiedads->tipoPropiedad}}</h6>
                <h6 class="card-text">{{$fav->propiedads->edoPropiedad }}</h6>
                <h6 class="card-title text-secondary">{{$fav->propiedads->fechaPub}}</h6>
                <h5 class="card-text text-dark"><strong>${{$fav->propiedads->precio}} mxm al mes</strong></h5>
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection