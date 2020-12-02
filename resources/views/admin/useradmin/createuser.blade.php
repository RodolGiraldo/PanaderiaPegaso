@extends('layouts.layoutadmin')

@section('content')

    <div class="row text-center alert bg-secondary text-white">
        <div class="col">
            <h1>Crear usuario</h1>
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
            <form action="/usuarios" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group font-weight-bold">
                        <label for="emailUsuario">Correo electronico:</label>
                        <input type="email" class="form-control" id="emailUsuario" name="emailUsuario"  placeholder="example@correo.com" value="{{ old('emailUsuario')}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group font-weight-bold">
                        <label for="names">Contraseña:</label>
                    <input type="password" class="form-control" id="names" name="names" value="{{old('passwordUsuario')}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group font-weight-bold">
                        <label for="idTipoUsuario">Tipo de usuario: </label>
                        <div class="form-group col">
                            <select name="idTipoUsuario">
                                <option value="">Seleccionar...</option>
                                <option value="1">Cliente</option>
                                <option value="2">Administrador</option>
                                <option value="3">Dueño</option>
                                <option value="4">Domiciliario</option>
                                <option value="5">Vendedor</option>
                            </select>
                        </div>
                    </div>
                </div>
                <a href="/usuarios" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    <br>
    <br>
@endsection
