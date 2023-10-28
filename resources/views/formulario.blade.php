@extends('plantillas.plantilla1')

@section('con1')
<div class="col-1">
    <a name="" id="" class="btn btn-outline-danger" href="/" role="button">Regresar</a>
</div>

<br>
<div style="max-width: 100%;" class="container">
    <form>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Nombre de la propiedad:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="exampleFormControlTextarea1" class="col-4 col-form-label">Descripción:</label>
            <div class="col-8">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">precio:</label>
            <div class="col-8">
                <input type="number" class="form-control" name="inputName" id="inputName" placeholder="Name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="formFile" class="col-4 col-form-label">Imagen de la propiedad:</label>
            <div class="col-8">
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fechaPub" class="col-4 col-form-label">Fecha de publicación:</label>
            <div class="col-8">
                <input type="date" class="form-control" name="fechaPub" id="fechaPub">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fechaPub" class="col-4 col-form-label">Tipo de propiedad:</label>
            <div class="col-8">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecciona un tipo de propiedad</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>



        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">Grabar</button>
            </div>
        </div>
    </form>
</div>
@endsection