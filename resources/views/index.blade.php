@extends("plantillas.plantilla1")

@section("con1")
<style>
    .card .card-text {
        margin-bottom: 0;
        /* Personaliza el valor según tus necesidades */
    }
</style>
<br>
<div class="row">
    <div class="col">
        <div class="form-floating">
            <select class="form-select" aria-label="Default select example" id="select">
                <option selected>Selecciona una colonia</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <label for="select"><strong>Colonias</strong></label>
        </div>
    </div>
    <div class="col-4"></div>
    <div class="col-3"></div>
    <div class="col-2"></div>
    <div class="col-1">
        <button type="button" class="btn btn-outline-danger">Agregar nueva casa</button>
    </div>
</div>
<div class="row">

</div>


<br>
<h1>Encuentra tu nuevo hogar!!</h1>
<div class="row row-cols-1 row-cols-md-6 g-4">

    <div class="col">
        <div class="card">
            <div id="carousel1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/775720cd-cee0-44a3-aec1-6e135195ef57.jpeg?im_w=1200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/06d9c082-9475-466e-bc7f-735618c32659.jpeg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/380b3d77-1a9e-423b-8f64-8189f124dccf.jpg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a style="text-decoration: none;" href="#">
                <div class="card-body">
                    <h5 class="card-title">Tepoztlán, México</h5>
                    <h6 class="card-text text-secondary">A 50 km de distancia</h6>
                    <h6 class="card-title text-secondary">4-9 de dic.</h6>
                    <h5 class="card-text text-dark"><strong>$1200 mxm al mes</strong></h5>
                </div>
            </a>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <div id="carousel1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/775720cd-cee0-44a3-aec1-6e135195ef57.jpeg?im_w=1200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/06d9c082-9475-466e-bc7f-735618c32659.jpeg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/380b3d77-1a9e-423b-8f64-8189f124dccf.jpg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a style="text-decoration: none;" href="#">
                <div class="card-body">
                    <h5 class="card-title">Tepoztlán, México</h5>
                    <h6 class="card-text text-secondary">A 50 km de distancia</h6>
                    <h6 class="card-title text-secondary">4-9 de dic.</h6>
                    <h5 class="card-text text-dark"><strong>$1200 mxm al mes</strong></h5>
                </div>
            </a>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <div id="carousel1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/775720cd-cee0-44a3-aec1-6e135195ef57.jpeg?im_w=1200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/06d9c082-9475-466e-bc7f-735618c32659.jpeg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/380b3d77-1a9e-423b-8f64-8189f124dccf.jpg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a style="text-decoration: none;" href="#">
                <div class="card-body">
                    <h5 class="card-title">Tepoztlán, México</h5>
                    <h6 class="card-text text-secondary">A 50 km de distancia</h6>
                    <h6 class="card-title text-secondary">4-9 de dic.</h6>
                    <h5 class="card-text text-dark"><strong>$1200 mxm al mes</strong></h5>
                </div>
            </a>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <div id="carousel1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/775720cd-cee0-44a3-aec1-6e135195ef57.jpeg?im_w=1200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/06d9c082-9475-466e-bc7f-735618c32659.jpeg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/380b3d77-1a9e-423b-8f64-8189f124dccf.jpg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a style="text-decoration: none;" href="#">
                <div class="card-body">
                    <h5 class="card-title">Tepoztlán, México</h5>
                    <h6 class="card-text text-secondary">A 50 km de distancia</h6>
                    <h6 class="card-title text-secondary">4-9 de dic.</h6>
                    <h5 class="card-text text-dark"><strong>$1200 mxm al mes</strong></h5>
                </div>
            </a>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <div id="carousel1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/775720cd-cee0-44a3-aec1-6e135195ef57.jpeg?im_w=1200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/06d9c082-9475-466e-bc7f-735618c32659.jpeg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/380b3d77-1a9e-423b-8f64-8189f124dccf.jpg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a style="text-decoration: none;" href="#">
                <div class="card-body">
                    <h5 class="card-title">Tepoztlán, México</h5>
                    <h6 class="card-text text-secondary">A 50 km de distancia</h6>
                    <h6 class="card-title text-secondary">4-9 de dic.</h6>
                    <h5 class="card-text text-dark"><strong>$1200 mxm al mes</strong></h5>
                </div>
            </a>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <div id="carousel1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/775720cd-cee0-44a3-aec1-6e135195ef57.jpeg?im_w=1200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-7602468/original/06d9c082-9475-466e-bc7f-735618c32659.jpeg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://a0.muscache.com/im/pictures/380b3d77-1a9e-423b-8f64-8189f124dccf.jpg?im_w=1440" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a style="text-decoration: none;" href="#">
                <div class="card-body">
                    <h5 class="card-title">Tepoztlán, México</h5>
                    <h6 class="card-text text-secondary">A 50 km de distancia</h6>
                    <h6 class="card-title text-secondary">4-9 de dic.</h6>
                    <h5 class="card-text text-dark"><strong>$1200 mxm al mes</strong></h5>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection