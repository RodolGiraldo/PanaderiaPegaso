@extends('layouts.layoutadmin')

@section('content')
    <div class="row text-center alert bg-secondary text-white">
        <div class="col">
            <h1>Productos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-left form-inline">
            <a href="/admin/index" class="btn bg-danger text-white">Regresar</a>
            <form class="col form-inline">
                <input class="form-control col-10" type="search" placeholder="Buscar por nombre" aria-label="Search">
                <button class="btn btn-outline-success col-2" type="submit">Buscar</button>
            </form>
            <a href="/productos/create" class="btn bg-info text-white">Crear nuevo producto</a>
        </div>
    </div>
    <br>
    <div class="row alert alert-success text-white">
        <div class="col">
            <table class="table">
                <thead>
                    <td class="font-weight-bold">Codigo</td>
                    <td class="font-weight-bold">Nombre</td>
                    <td class="font-weight-bold">Descripción</td>
                    <td class="font-weight-bold">Precio</td>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->codigoProducto }}</td>
                            <td>{{ $producto->nombreProducto }}</td>
                            <td>{{ $producto->descripcionProducto }}</td>
                            <td>{{ $producto->precioProducto }}</td>
                            <td>
                                <a class="btn btn-warning" href="/productos/{{ $producto->codigoProducto }}/edit">Edit</a>
                            </td>
                            <td>
                            <form action="{{route('productos.destroy', $producto->codigoProducto)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Delete"
                                        onClick="return confirm('¿Está seguro que quiere eliminar este producto?')" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
