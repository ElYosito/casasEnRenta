@extends("plantillas.plantilla2")

@section('con2')
<form action="{{ route('arrendador.catalogo') }}" method="GET">
    @csrf
    <select class="form-select" aria-label="Default select example" name="estado" onchange="this.form.submit()">
        <option selected>Selecciona un estado</option>
        @foreach($estados as $estado)
        <option value="{{ $estado }}" {{ request('estado') == $estado ? 'selected' : '' }}>{{ ucfirst($estado) }}</option>
        @endforeach
    </select>
</form>

<br>
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
                    <td>Estado</td>
                    <td>Eliminar</td>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($propiedades as $propiedad)
                <tr class="table-primary">
                    <td>{{ $propiedad->titulo }}</td>
                    <td>{{ $propiedad->fechaPub }}</td>
                    <td>${{ $propiedad->precio }}</td>
                    <td>
                        <form action="{{ route('propiedad.cambiar',['propiedad'=>$propiedad->id]) }}" method="POST">
                            @csrf
                            <input name="edoPropiedad" value="{{ $propiedad->edoPropiedad === 'Rentada' ? 'publicada' : 'Rentada' }}" hidden>
                            <button type="submit">{{$propiedad->edoPropiedad}}</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('propiedad.eliminada',['propiedad'=>$propiedad->id]) }}" method="POST">
                            @csrf
                            <input name="edoPropiedad" value="Eliminada" hidden>
                            <button type="submit">Eliminada</button>
                        </form>

                    </td>

                    <td><a type="button" class="btn btn-secondary" href="{{ route('propiedad.show',['propiedad'=>$propiedad->id]) }}">Ver</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>





@endsection