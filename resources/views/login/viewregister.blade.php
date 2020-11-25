@extends('layouts.layoutlogin')

@section('content')
    <div class="col">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    - {{ $error }}<br>
                @endforeach
            </div>
        @endif
    </div>
    <div class="card mb" style="background-color:none" style="padding: 30px">
        <form class="col">
            <div class="col">
                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label for="name">Nombres</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Apellidos</label>
                        <input type="text" class="form-control" id="lastname">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="gender">Genero</label>
                    <select id="gender" class="form-control">
                        <option selected>seleccionar</option>
                        <option>Masculino</option>
                        <option>Femenino</option>
                        <option>Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-group col-md-4">
                        <label for="document">Tipo de documento</label>
                        <select id="document" class="form-control">
                            <option selected>seleccionar</option>
                            <option>Cedula de ciudadania</option>
                            <option>Cedula extranjera</option>
                            <option>Tarjeta de identidad</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="numberdocument">Numero de documento</label>
                        <input type="number" class="form-control" id="numberdocument">
                    </div>
                    <div class="form-group">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Correo electronico</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="name@example.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword4">
                            <small id="passwordHelpInline" class="text-muted">
                                Debe tener entre 8 y 20 caracteres.
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
@endsection
