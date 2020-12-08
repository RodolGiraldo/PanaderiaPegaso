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
                <th scope="col">id</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio Total</th>
                <th scope="col">Eliminar del Carrito</th>
            </tr>
        </thead>
        <tbody>
            @foreach (Cart::getContent() as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td><input type="number" min="1" step="1" class="cantidad" name="cantidad" id="cantidad{{$item->id}}" value="{{$item->quantity}}"></td>
                <td>$<input type="number" class="precioTotal" name="precioTotal" id="precioTotal{{$item->id}}" value="{{$item->price * $item->quantity}}" disabled></td>
                <td>Btn-Eliminar</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a type="button" class="btn btn-primary" href="/customer">Añadir Producto</a>
    <button type="submit" class="btn btn-primary">Comprar</button>
</form>
@endsection