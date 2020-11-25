@extends('layouts.layoutadmin')
@section('content')

    <div class="row text-center alert bg-secondary text-white">
        <div class="col">
            <h1>Editar</h1>
        </div>
    </div>

    <body class="col">
        <div class="row alert alert-success">

            <form action="#" method="POST">
                <div class="col">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                - {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif
                </div>
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group font-weight-bold">
                        <label for="id_product">IdProducto:</label>
                        <input type="text" class="form-control" id="id_product" name="id_product" value="">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="nameproduct">Nombre:</label>
                        <input type="text" class="form-control" id="nameproduct" name="nameproduct" value="">
                    </div>
                </div>
                <div class="form-row form-group font-weight-bold">
                    <label for="descriptionproduct">Description:</label>
                    <textarea name="text" id="descriptionproduct" cols="30" rows="10"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group font-weight-bold">
                        <label for="priceproduct">Precio unitario</label>
                        <input type="number" name="priceproduct" id="priceproduct">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="quatityproduct">Cantidad</label>
                        <input type="number" name="quatityproduct" id="quatityproduct">
                    </div>
                </div>
                <a href="#" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
        <br>
    @endsection
