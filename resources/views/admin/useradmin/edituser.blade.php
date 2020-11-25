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
                        <label for="names">Nombres:</label>
                        <input type="text" class="form-control" id="names" name="names" value="">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="lastName">Apellidos:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group font-weight-bold col">
                        <label for="gender">Genero: </label>
                        <select name="gender">
                            @if ('gender' == 'Male'){
                                <option value="">Seleccionar..</option>
                                <option value="Male" selected>Masculino</option>
                                <option value="Female">Femenino</option>
                                <option value="Other">Otro</option>
                            }@elseif('gender'=="Female"){
                                <option value="">Seleccionar..</option>
                                <option value="Male">Masculino</option>
                                <option value="Female" selected>Femenino</option>
                                <option value="Other">Otro</option>
                            }@else {
                                <option value="">Seleccionar..</option>
                                <option value="Male">Masculino</option>
                                <option value="Female">Femenino</option>
                                <option value="Other" selected>Otro</option>
                                }
                            @endif
                        </select>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="user_type">Tipo de usuario: </label>
                        <select name="user_type">
                            @if ('user_type' == '1'){
                                <option value="">Seleccionar..</option>
                                <option value="1" selected>Administrador</option>
                                <option value="2">Cliente</option>
                                <option value="3">Domiciliario</option>
                                <option value="4">Dueño</option>
                                <option value="5">Vendedor</option>
                            }@elseif('user_type'=="2"){
                                <option value="">Seleccionar..</option>
                                <option value="1">Administrador</option>
                                <option value="2" selected>Cliente</option>
                                <option value="3">Domiciliario</option>
                                <option value="4">Dueño</option>
                                <option value="5">Vendedor</option>
                                }
                            }@elseif('user_type'=="3"){
                                <option value="">Seleccionar..</option>
                                <option value="1">Administrador</option>
                                <option value="2">Cliente</option>
                                <option value="3" selected>Domiciliario</option>
                                <option value="4">Dueño</option>
                                <option value="5">Vendedor</option>
                                }
                            }@elseif('user_type'=="4"){
                                <option value="">Seleccionar..</option>
                                <option value="1">Administrador</option>
                                <option value="2">Cliente</option>
                                <option value="3">Domiciliario</option>
                                <option value="4" selected>Dueño</option>
                                <option value="5">Vendedor</option>
                            }@else{
                                <option value="">Seleccionar..</option>
                                <option value="1">Administrador</option>
                                <option value="2">Cliente</option>
                                <option value="3">Domiciliario</option>
                                <option value="4">Dueño</option>
                                <option value="5" selected>Vendedor</option>
                                }
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="email">Correo electronico:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="example@correo.com"
                        value="">
                </div>
                <a href="#" class="btn btn-danger">Descartar cambios</a>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>

        </div>
        <br>
    @endsection
