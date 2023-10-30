@extends("plantillas.plantilla1")

@section('con1')
<ul class="nav nav-underline justify-content-between">
  <li class="nav-item">
    <a class="nav-link" href="/agregarcasa">Nueva propiedad</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/catalogo">Mis propiedades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="/estadoPropiedades">Estado de propiedades</a>
  </li>
</ul>
<br>
<div style="max-width: 100%;" class="container">
        <div class="row">
            <div class="col">
                @yield("con2")
            </div>
        </div>
    </div>
    <script>
  // Obtenemos la URL actual
  var urlActual = window.location.href;

  // Seleccionamos todos los enlaces dentro de la lista de navegación
  var enlaces = document.querySelectorAll(".nav-link");

  // Recorremos los enlaces para comparar la URL actual con la URL del enlace
  enlaces.forEach(function(enlace) {
    if (urlActual === enlace.href) {
      enlace.classList.add("active"); // Agregamos la clase "active" si la URL coincide
    }
  });
</script>
@endsection 