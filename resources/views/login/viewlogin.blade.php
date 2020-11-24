@extends('layouts.layoutlogin')

@section('content')

    <div class="card mb" style="">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="{{url('image/Logo.jpeg')}}" class="card-img" alt="..." height="300px" width="300px">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo Electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
