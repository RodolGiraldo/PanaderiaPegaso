@extends('layouts.layoutdomiciliary')
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
            <th scope="col">Codigo Pedido</th>
            <th scope="col">Estado</th>
            <th scope="col">Nombre Cliente</th>
            <th scope="col"># Telefono</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1A2D11</th>
            <td>Pendiente</td>
            <td>Pedro Luis Muñoz</td>
            <td>3224324355</td>
        </tr>
    </tbody>
</table>
<br>
<div class="row">
    <div class="col">
        <img src="{{url('image/Logo.jpeg')}}" class="card-img" alt="..." height="300px" width="100%">
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="button" class="btn btn-primary">Volver</button>
        <button type="button" class="btn btn-primary">Realizar Pedido</button>
        <button type="button" class="btn btn-primary">Confimar Entrega Pedido</button>
    </div>
</div>
@endsection