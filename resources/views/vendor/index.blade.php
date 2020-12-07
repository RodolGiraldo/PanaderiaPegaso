@extends('layouts.layoutvendor')
@section('content')
<div class="card text-center">
    <div class="card-body">
        <h2 class="card-title">Agregar Venta</h2>
    </div>
</div>
<br>
<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCode4">Codigo</label>
            <input type="text" class="form-control" id="inputCode4" placeholder="Code">
        </div>
        <div class="form-group col-md-6">
            <label for="inputLastAmount4">Cantidad</label>
            <input type="text" class="form-control" id="inputAmount4" placeholder="Amount">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>
<br>
<div class="card text-center">
    <div class="card-body">
        <h2 class="card-title">Productos Agregados</h2>
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
    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalLong">Calcular</button>
    <button type="submit" class="btn btn-primary">Comprar</button>
</form>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nombre Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{url('image/Logo.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nombre Producto</h5>
                    <p class="card-text">Aqui va la descripcion del producto.</p>
                    <p class="card-text">Precio: $0.0 <input type="number" name="cantidad" id="cantidad"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>
@endsection