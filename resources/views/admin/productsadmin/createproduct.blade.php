@extends('layouts.layoutadmin')

@section('content')

    <div class="row text-center alert bg-secondary text-white">
        <div class="col">
            <h1>Crear producto</h1>
        </div>
    </div>
    <br>
    <div class="row alert alert-success">
        <div class="col">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            - {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
            </div>
            <form action="/productos" method="POST">
                @csrf
                <div class="form-row">
                    
                    <div class="form-group font-weight-bold">
                        <label for="nombreProducto">Nombre:</label>
                        <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" value="{{ old('nombreProducto')}}">
                    </div>
                </div>
                <div class="form-row form-group font-weight-bold">
                    <label for="descripcionProducto">Description:</label>
                    <textarea name="text" id="descripcionProducto" cols="30" rows="10"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group font-weight-bold">
                        <label for="precioProducto">Precio unitario</label>
                        <input type="number" name="precioProducto" id="precioProducto" value="{{ old('precioProducto')}}">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="direccionImagenProducto">Nombre imagen</label>
                        <input type="text" name="direccionImagenProducto" id="direccionImagenProducto" value="{{ old('direccionImagenProducto')}}">
                    </div>
                </div>
                <a href="/productos" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    <br>
@endsection
