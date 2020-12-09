@extends('layouts.layoutowner')

@section('content')
    <div class="row text-center alert bg-secondary text-white">
        <div class="col">
            <h1>Ventas</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-left form-inline">
            <a href="/admin/index" class="btn bg-primary text-white">Generar Reporte</a>
            
        </div>
    </div>
    <br>
    <div class="row alert alert-success text-white">
        <div class="col">
            
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Codigo Pedido</th>
                        <th scope="col">Nombre Cliente</th>
                        <th scope="col">Direccion de entrega</th>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio Total</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $item)
                        <tr>
                            <th scope="row">{{$item->idPedido}}</th>
                            <td>{{$item->nombreCliente}}</td>
                            <td>{{$item->direccionPedido}}</td>
                            <td>{{$item->nombreProducto}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td>{{$item->precioTotal}}</td>
                            <td>{{$item->nombreEstado}}</td>
                            <td>Btn-Detalles</td>
                        </tr>
                    @endforeach
        
                </tbody>
            </table>
        </div>
    </div>

@endsection