@extends('layouts.layoutadmin')

@section('content')
    <div class="row text-center alert bg-secondary text-white">
        <div class="col">
            <h1>Clientes</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-left form-inline">
            <a href="/admin/index" class="btn bg-danger text-white">Regresar</a>
            <form class="form-inline col ">
                <input class="form-control col-6" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success col-2" type="submit">Search</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row alert alert-success text-white">
        <div class="col">
            <table class="table">
                <thead>
                    <td class="font-weight-bold">Nombre</td>
                    <td class="font-weight-bold">Apellido</td>
                    <td class="font-weight-bold">Correo electronico</td>
                    <td class="font-weight-bold">Documento</td>
                    <td class="font-weight-bold">F_Nacimiento</td>
                    <td class="font-weight-bold">Genero</td>
                    <td class="font-weight-bold">Telefono</td>
                    <td class="font-weight-bold">Tipo_usuario</td>
                </thead>
            </table>
        </div>
    </div>

@endsection
