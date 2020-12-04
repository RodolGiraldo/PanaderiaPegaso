@extends('layouts.layoutcustomer')
@section('content')

<form class="form-inline">
    <input class="form-control col-10" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success col-2" type="submit">Search</button>
</form>
<br>
<div class="card-deck">
    <div class="card">
        <img src="{{url('image/Logo.jpeg')}}" class="card-img" alt="..." height="150px" width="150px">
        <div class="card-body">
            <h5 class="card-title">Nombre Producto</h5>
            <p class="card-text">$0.0</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Agregar
            </button>
        </div>
    </div>
    <div class="card">
        <img src="{{url('image/Logo.jpeg')}}" class="card-img" alt="..." height="150px" width="150px">
        <div class="card-body">
            <h5 class="card-title">Nombre Producto</h5>
            <p class="card-text">$0.0</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Agregar
            </button>
        </div>
    </div>
    <div class="card">
        <img src="{{url('image/Logo.jpeg')}}" class="card-img" alt="..." height="150px" width="150px">
        <div class="card-body">
            <h5 class="card-title">Nombre Producto</h5>
            <p class="card-text">$0.0</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Agregar
            </button>
        </div>
    </div>
    <div class="card">
        <img src="{{url('image/Logo.jpeg')}}" class="card-img" alt="..." height="150px" width="150px">
        <div class="card-body">
            <h5 class="card-title">Nombre Producto</h5>
            <p class="card-text">$0.0</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Agregar
            </button>
        </div>
    </div>
</div>
<br>
<div class="card-deck">
    <div class="card">
        <img src="{{url('image/Logo.jpeg')}}" class="card-img" alt="..." height="150px" width="150px">
        <div class="card-body">
            <h5 class="card-title">Nombre Producto</h5>
            <p class="card-text">$0.0</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Agregar
            </button>
        </div>
    </div>
    <div class="card">
        <img src="{{url('image/Logo.jpeg')}}" class="card-img" alt="..." height="150px" width="150px">
        <div class="card-body">
            <h5 class="card-title">Nombre Producto</h5>
            <p class="card-text">$0.0</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Agregar
            </button>
        </div>
    </div>
    <div class="card">
        <img src="{{url('image/Logo.jpeg')}}" class="card-img" alt="..." height="150px" width="150px">
        <div class="card-body">
            <h5 class="card-title">Nombre Producto</h5>
            <p class="card-text">$0.0</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Agregar
            </button>
        </div>
    </div>
    <div class="card">
        <img src="{{url('image/Logo.jpeg')}}" class="card-img" alt="..." height="150px" width="150px">
        <div class="card-body">
            <h5 class="card-title">Nombre Producto</h5>
            <p class="card-text">$0.0</p>
        </div>
        <div class="card-footer">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Agregar
            </button>
        </div>
    </div>
</div>


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
                <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
            </div>
        </div>

    </div>
</div>
</div>
@endsection