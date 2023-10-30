@extends("plantillas.plantilla1")

@section('con1')
<ul class="nav nav-underline justify-content-between">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
<div style="max-width: 90%;" class="container">
        <div class="row">
            <div class="col">
                @yield("con2")
            </div>
        </div>
    </div>
@endsection 