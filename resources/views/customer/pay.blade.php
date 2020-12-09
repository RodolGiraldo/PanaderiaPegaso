@extends('layouts.layoutcustomer')
@section('content')
    <div id="accordion">
        <div class="card">

            <div class="col-12">
                <h3>Formulario para direccion</h3>
            </div>


            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">

                        Pago con tarjeta de Credito o Debito.

                    </h5>
                </div>
            </button>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body" style="height: 600px">

                                    <!-- Formulario -->
                                    <form action="/customer/orders/pay" class="formulario-tarjeta active" id="formulario-tarjeta" method="POST">
                                        @csrf
                                        <div class="grupo">
                                            <label for="inputNumero">Numero Tarjeta</label>
                                            <input type="text" id="inputNumero" maxlength="19" autocomplete="off">
                                        </div>
                                        <div class="grupo">
                                            <label for="inputNombre">Nombre Tarjeta</label>
                                            <input type="text" id="inputNombre" maxlength="19" autocomplete="off">
                                        </div>
                                        <div class="flexbox">
                                            <div class="grupo expira">
                                                <label for="selectMes">Expiracion</label>
                                                <div class="flexbox">
                                                    <div class="grupo-select">
                                                        <select name="mes" id="selectMes">
                                                            <option disabled selected>Mes</option>
                                                        </select>
                                                        <i class="fas fa-angle-down"></i>
                                                    </div>
                                                    <div class="grupo-select">
                                                        <select name="year" id="selectYear">
                                                            <option disabled selected>Año</option>
                                                        </select>
                                                        <i class="fas fa-angle-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grupo ccv">
                                                <label for="inputCCV">CCV</label>
                                                <input type="text" name="inputCCV" id="inputCCV" maxlength="3">
                                            </div>
                                        </div>
                                        <input type="hidden" name="tipoPago" value="1">
                                        <input type="hidden" name="direccion" value="Cr 23 #52-69">
                                        <button type="submit" class="btn-enviar">Pagar</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body " style="height: 600px">
                                    {{---------------------- Tarjeta
                                    -------------------}}
                                    <section class="tarjeta" id="tarjeta">
                                        <div class="delantera">
                                            <div class="logo-marca" id="logoMarca">

                                            </div>
                                            <img src="/img/chip-tarjeta.png" class="chip" alt="">
                                            <div class="datos">
                                                <div class="grupo" id="numero">
                                                    <p class="label">Número Tarjeta</p>
                                                    <p class="numero">#### #### #### ####</p>
                                                </div>
                                                <div class="flexbox">
                                                    <div class="grupo" id="nombre">
                                                        <p class="label">Nombre Tarjera</p>
                                                        <p class="nombre">Jhon Doe</p>
                                                    </div>

                                                    <div class="grupo" id="expiracion">
                                                        <p class="label">Expiracion</p>
                                                        <p class="expiracion"><span class="mes">MM</span> / <span
                                                                class="year">AA</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="trasera">
                                            <div class="barra-magnetica"></div>
                                            <div class="datos">
                                                <div class="grupo" id="firma">
                                                    <p class="label">Firma</p>
                                                    <div class="firma">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="grupo" id="ccv">
                                                    <p class="label">CCV</p>
                                                    <p class="ccv"></p>
                                                </div>
                                            </div>

                                            <p class="leyenda">
                                                Lorem ipsum dolor sit amet consectetur for you house Playvox
                                            </p>
                                            <a href="#" class="link-blanco">wwww.tubanco.com</a>


                                        </div>

                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div class="card">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                aria-controls="collapseTwo">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">

                        Pago en Efectivo (Pago ContraEntrega)

                    </h5>
                </div>
            </button>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <form action="/customer/orders/pay" method="post">
                        @csrf
                        <input type="hidden" name="tipoPago" value="2">
                        <input type="hidden" name="direccion" value="Cr 23 #52-69">
                        <h3>Mensaje:</h3>
                        <p>Usted pagara un monto total de: $(Cantidad), y realizara el pago cuando nuestro domiciliaro
                            llegue al
                            lugar de entrega.
                        </p>
                        <p>
                            Gracias por comprar en Panaderia pegaso.
                        </p>
                        <button type="submit" class="btn-enviar">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
