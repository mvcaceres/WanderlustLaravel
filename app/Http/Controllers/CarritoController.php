<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Producto;
use Illuminate\Http\Request;
use Auth;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Carrito::where('estado',0)
        ->where('user_id', Auth::user()->id)
        ->get();

        $carts = Carrito::all()->where('estado',0)
        ->where('user_id', Auth::user()->id);
        $total = 0;

        foreach ($carts as $item) {
          $total = $total +($item->cantidad * $item->precio);
          }

        return view('carrito', compact('carts', 'total'));
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
         //Validamos que el número ingresado sea positivo.
      $rule = [
        'cantidad'=>"integer|min:1"
      ];
      $message = [
        'min'=>'La cantidad debe ser mayor a :min.',
        'integer'=>'El valor debe ser numérico.'
      ];

      $this->validate($request, $rule, $message);

      $producto = Producto::find($request->id);

      //El producto ya está cargado en el cart ->necesitamos el id de producto en la tabla: crear m,igration.
      $existe = Carrito::where('producto_id', $request->id)->where('user_id',Auth::user()->id)->where('estado','0')->first();

      if($existe){
        $existe->cantidad += $request->cantidad;
        $existe->save();
        return redirect('/productos');
      }

      $cart = new Carrito; //Recordar que cada Cart es un item dentro del carrito.
      $cart->producto_id = $producto->id;
      $cart->nombre = $producto->nombre;
      $cart->precio = $producto->precio;
      $cart->cantidad = $request->cantidad;
      $cart->user_id = Auth::user()->id;
      $cart->comentarios= "no hay comentarios";

      $cart->save();
      return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Carrito::where('id',$id)
        ->where('user_id',Auth::user()->id)
        ->where('estado',0)->get();

        $item[0]->delete();
        return redirect('/carrito');
    }

    public function cerrarcarrito(){
        $items = Carrito::where('user_id',Auth::user()->id)
        ->where('estado',0)->get();

        $ultimoCarrito = Carrito::max('numerocarrito'); 

        foreach ($items as $item) {
          $item->numerocarrito = $ultimoCarrito + 1;
          $item->estado = 1;
          $item->save();
        }

        return redirect ('/productos');
      }


    public function historial(){
        $carts = Carrito::where('user_id',Auth::user()->id)
        ->where('estado',1)->get()->groupBy('numerocarrito');

        return view('historial', compact('carts'));


      }

}
