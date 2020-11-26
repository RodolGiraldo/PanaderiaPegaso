@extends('layouts.layoutdomiciliary')
@section('content')
<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">Domicilios disponibles</h5>
    </div>
</div>
<br>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col"># Domicilio</th>
            <th scope="col">Codigo Pedido</th>
            <th scope="col">Estado</th>
            <th scope="col">Detalles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>1A2D11</td>
            <td>Pendiente</td>
            <td>Btn-Detalles</td>
        </tr>
    </tbody>
</table>
@endsection