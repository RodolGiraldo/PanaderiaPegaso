@extends('layouts.layoutcustomer')
@section('content')
<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">Tus Pedidos</h5>
    </div>
</div>
<br>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col"># Pedido</th>
            <th scope="col">Codigo Pedido</th>
            <th scope="col">Estado</th>
            <th scope="col">Cancelar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>1A2D11</td>
            <td>Pendiente</td>
            <td>Btn-Cancelar</td>
        </tr>
    </tbody>
</table>
@endsection