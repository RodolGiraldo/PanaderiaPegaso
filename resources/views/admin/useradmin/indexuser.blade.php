@extends('layouts.layoutadmin')

@section('content')
    <div class="row text-center alert bg-secondary text-white">
        <div class="col">
            <h1>Usuarios</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-left form-inline">
            <a href="/admin/index" class="btn bg-danger text-white">Regresar</a>
            <form class="col form-inline">
                <input class="form-control col-10" type="search" placeholder="Buscar por documento" aria-label="Search">
                <button class="btn btn-outline-success col-2" type="submit">Buscar</button>
            </form>
            <a href="#" class="btn bg-info text-white">Crear nuevo producto</a>
        </div>
    </div>
    <br>
    <div class="row alert alert-success text-white">
        <div class="col">
            <table class="table">
                <thead>
                    <td class="font-weight-bold">Correo Electronico</td>
                    <td class="font-weight-bold">Tipo de usuario</td>
                    <td>
                        <a class="btn btn-warning" href="#">Edit</a>
                    </td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete"
                                onClick="return confirm('¿Está seguro que quiere eliminar este usuario?')" />
                        </form>
                    </td>
                </thead>
            </table>
        </div>
    </div>

@endsection
