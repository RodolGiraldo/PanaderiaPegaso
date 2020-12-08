<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function orders($cliente){
    //     return view('customer.orders',[
    //         'clientes' => $cliente
    //     ]);
    // }

    public function orders(){
        $idCliente = 1;
        return view('customer.orders',[
            'datos' => DB::select(" select pe.\"idPedido\",pepo.\"cantidad\",pepo.\"precioTotal\",pro.\"nombreProducto\",es.\"nombreEstado\"
            FROM pedidos pe 
                INNER JOIN pedido_productos pepo
                    ON pe.\"idPedido\" = pepo.\"idPedido\"
             INNER JOIN productos pro
                 ON pro.\"codigoProducto\" = pepo.\"codigoProducto\"
             INNER JOIN estado_pedidos espe
                 ON espe.\"idPedido\" = pe.\"idPedido\" 
             INNER JOIN estados es
                 ON es.\"codigoEstado\" = espe.\"codigoEstado\"
             where pe.\"idCliente\" = $idCliente ")
        ]);
    }

    public function index()
    {
        return view('admin/customersadmin.indexcustomers', [
            'clientes' => DB::select('select * from ListarClientes()'),
            'documentos'=> DB::select('select * from ListarDocumentos()')
        ]);
    }

    public function viewIndexCustomer(){
        return view('customer.index',[
            'productos' => DB::select('select * from listarproductos()')
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.viewregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();

        $cliente->nombreCliente = $request->get('nombreCliente');
        $cliente->apellidoCliente = $request->get('apellidoCliente');
        $cliente->telefonoCliente = $request->get('telefonoCliente');
        $cliente->generoCliente = $request->get('generoCliente');
        $cliente->idTipoIdentificacion = $request->get('idTipoIdentificacion');
        $cliente->cedulaCliente = $request->get('cedulaCliente');
        $cliente->emailCliente = $request->get('emailCliente');
        $cliente->passwordCliente = $request->get('passwordCliente');


        DB::select("select CrearCliente('$cliente->nombreCliente', '$cliente->apellidoCliente', '$cliente->telefonoCliente', '$cliente->generoCliente', $cliente->idTipoIdentificacion, $cliente->cedulaCliente, '$cliente->emailCliente', '$cliente->passwordCliente')");
        DB::select("select CrearUsuario('$cliente->emailCliente', '$cliente->passwordCliente',1)");

        return redirect('/customer');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
