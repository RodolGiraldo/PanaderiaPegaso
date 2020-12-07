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
    public function index()
    {
        return view('admin/customersadmin.indexcustomers', [
            'clientes' => DB::select('select * from ListarClientes()'),
            'documentos'=> DB::select('select * from ListarDocumentos()')
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
