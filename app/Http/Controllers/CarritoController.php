<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Producto;
use DB;

class CarritoController extends Controller
{
    public function add(Request $request){
        $producto = new Producto();
        $codigo = $request->get('codigoProducto');
        $producto = DB::select("select * from BuscarProductoPorId($codigo)");
        $cantidad = $request->get('cantidad');
        $precioUnidad = $request->get('precioProducto');
        $precioTotal = $precioUnidad * $cantidad;
        $nombre = $request->get('nombreProducto');
        
       
        Cart::add(
            $codigo, 
            $nombre,
            $precioUnidad,
            $cantidad
            
        );
        return back();
          
            
    }

    public function cart(){
        
        return view('checkout');
    }

    public function removeitem(Request $request) {
        //$producto = Producto::where('id', $request->id)->firstOrFail();
        Cart::remove([
        'id' => $request->id,
        ]);
        return back()->with('success',"Producto eliminado con éxito de su carrito.");
    }

    public function clear(){
        Cart::clear();
        return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");
    }
}
