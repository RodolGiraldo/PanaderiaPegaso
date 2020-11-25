@extends('layouts.layoutcustomer')
@section('content')
<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">Carrito de Compras</h5>
    </div>
</div>
<br>
<form action="">


    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio Total</th>
                <th scope="col">Eliminar del Carrito</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Pan de la Abuela</td>
                <td>
                    <input type="number" name="cantidad" id="cantidad">
                </td>
                <td>$12000</td>
                <td>Btn-Eliminar</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Pan de la tia</td>
                <td>
                    <input type="number" name="cantidad" id="cantidad">
                </td>
                <td>$6000</td>
                <td>Btn-Eliminar</td>
            </tr>
        </tbody>
    </table>
    <br>
    <button type="button" class="btn btn-primary">Añadir Producto</button>
    <button type="submit" class="btn btn-primary">Comprar</button>
</form>
@endsection