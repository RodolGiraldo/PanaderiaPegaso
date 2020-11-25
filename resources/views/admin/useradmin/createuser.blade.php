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
            <form action="#">
                @csrf
                <div class="form-row">
                    <div class="form-group font-weight-bold">
                        <label for="names">Nombres:</label>
                        <input type="text" class="form-control" id="names" name="names" value="">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="lastName">Apellidos:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group font-weight-bold">
                        <label for="gender">Genero: </label>
                        <div class="form-group col">
                            <select name="gender">
                                <option value="">Seleccionar...</option>
                                <option value="Male">Hombre</option>
                                <option value="Female">Mujer</option>
                                <option value="Other">Otros</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="user_type">Tipo de usuario: </label>
                        <div class="form-group col">
                            <select name="user_type">
                                <option value="">Seleccionar...</option>
                                <option value="1">administrador</option>
                                <option value="2">Cliente</option>
                                <option value="3">Domiciliario</option>
                                <option value="4">Dueño</option>
                                <option value="5">Vendedor</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group font-weight-bold">
                        <label for="email">Correo electronico: </label>
                        <input type="email" class="form-group" id="email" placeholder="example@correo.com" name="email"
                            value="">
                    </div>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="password">Contraseña: </label>
                    <input type="password" class="form-group" id="password"  name="password"
                        value="">
                </div>
                <a href="#" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    <br>
    <br>
@endsection
