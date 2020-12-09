<?php

namespace App\Http\Controllers;

use App\Models\Domiciliario;
use Illuminate\Http\Request;
use DB;

class DomiciliarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idPedido = $request->get('idProducto');
        DB::select("select * from actualizarEstadoPedido($idPedido,3)");

        return redirect('/customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domiciliario  $domiciliario
     * @return \Illuminate\Http\Response
     */
    public function show(Domiciliario $domiciliario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domiciliario  $domiciliario
     * @return \Illuminate\Http\Response
     */
    public function edit(Domiciliario $domiciliario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domiciliario  $domiciliario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domiciliario $domiciliario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domiciliario  $domiciliario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domiciliario $domiciliario)
    {
        //
    }
}
