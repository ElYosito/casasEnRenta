@extends("plantillas.plantilla2")

@section('con2')
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light">
                <caption></caption>
                <tr>
                    <th>Titulo</th>
                    <th>Fecha de publicación</th>
                    <th>Precio</th>
                    <th>Eliminar</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($propiedades as $propiedad)
                <tr class="table-primary">
                    <td>{{ $propiedad->titulo }}</td>
                    <td>{{ $propiedad->fechaPub }}</td>
                    <td>${{ $propiedad->precio }}</td>
                    <td><a type="button" class="btn btn-primary" href="#" role="button">Eliminar</a></td>
                    <td>
                        <a type="button" class="btn btn-secondary ver-propiedad" href="#">Ver</a>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection