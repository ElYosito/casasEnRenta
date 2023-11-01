@extends('plantillas.plantilla1')

@section('con1')
  <nav class="navbar navbar-expand-lg bg-dark text-white rounded">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <button class="btn btn-outline-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <h1>Catalogo Propiedades</h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a name="" id="" class="btn btn-outline-danger" href="/agregarcasa" role="button">Agregar Propiedad</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu - Catalogo</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <hr>
    <div class="offcanvas-body">
      <i style="font-size: 25px;" class="fa-solid fa-house"><a href="#">Mis Casas</a></i><br>
      <i style="font-size: 25px;" class="fa-regular fa-money-bill-1"><a href="#">Pagos</a></i><br>
      <i style="font-size: 25px;" class="fa-solid fa-square-poll-vertical"><a href="#">estadisticas</a></i>
    </div>
  </div>

  <br>

  <div style="max-width: 100%;" class="container">
    <div class="row">
      <div class="col">
        @yield("con2")
      </div>
    </div>
  </div>
  @endsection
