<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Producto;
use Darryldecode\Cart\Cart as CartCart;
use DB;

class CarritoController extends Controller
{
    public function add(Request $request){
        $codigo = $request->get('codigoProducto');
        $cantidad = $request->get('cantidad');
        $precioUnidad = $request->get('precioProducto');
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

    public function viewPay(){
        return view('customer/pay');
    }
    public function pay(Request $request){
        $direccion = $request->get('direccion');
        $tipopago = $request->get('tipoPago');
        $cedulaCliente = 1;//Esto es de momento toca poner que la traiga de la sesion
        $idDomiciliario = 1;//Esto igual

        foreach (Cart::getContent() as $item){
           DB::select("select * from AddPedido('$direccion',$tipopago,$cedulaCliente,$idDomiciliario)");
           DB::select("select * from AddPedidoProducto($item->quantity,$item->id)");
        }
        $this->clear();
        return redirect('/customer');
    }
}
