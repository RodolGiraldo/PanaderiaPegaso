@extends('layouts.layoutcustomer')
@section('content')
<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">Configuracion de Datos Personales</h5>
    </div>
</div>
<br>
<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName4">Nombres</label>
            <input type="text" class="form-control" id="inputName4" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputLastName4">Apellidos</label>
            <input type="text" class="form-control" id="inputLastName4" placeholder="LastName">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputTelephone4">Telefono</label>
            <input type="number" class="form-control" id="inputTelephone4" placeholder="Telephone">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress4">Direccion</label>
            <input type="text" class="form-control" id="inputAddress4" placeholder="Address">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection