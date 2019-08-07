<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;
use Validator;
use Auth;
use isadmin;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categoria = null)
    {
      if($categoria){
        $productos = Producto::all()->where('categoria_id', $categoria);
        return view('productos', compact('productos'));
      } else {
      $productos = Producto::all();
      return view('productos', compact('productos'));
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('agregarproducto', compact('categorias'));

        //te deveuvle la vista con el formulario para crear el producto
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $reglas = [
            "categoria_id"=> "required",
            "nombre" => "required|string|min:2",
            "tamano"=> "required|string",
            "color"=> "required|string"
          ];

          $mensajes = [
            "string" => "El campo :attribute  debe ser de texto.",
            "required" => "El campo :attribute debe completarse",
            "min" => "El campo debe :attribute tener como minimo :value caracteres"
          ];

          $this->validate($request, $reglas, $mensajes);

          //Crear un nuevo objeto Producto
          $nuevoProducto = new Producto();
          $path = $request->file('imagen')->store('/public/producto');
          $file = basename($path);

          $nuevoProducto->categoria_id = $request["categoria_id"];
          $nuevoProducto->nombre = $request["nombre"];
          $nuevoProducto->descripcion = $request["descripcion"];
          $nuevoProducto->precio = $request["precio"];
          $nuevoProducto->imagen = $file;
          $nuevoProducto->stock = $request["stock"];
          $nuevoProducto->tamano = $request["tamano"];
          $nuevoProducto->color = $request["color"];

          $nuevoProducto->save();

          return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $producto = Producto::find($id);
      return view('producto', compact('producto'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $producto = Producto::find($id);
      return view('editarproducto', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $reglas = [
        "categoria_id"=> "required",
        "nombre" => "required|string|min:2",
        "tamano"=> "required|string",
        "color"=> "required|string"
      ];

      $mensajes = [
        "string" => "El campo :attribute  debe ser de texto.",
        "required" => "El campo :attribute debe completarse",
        "min" => "El campo debe :attribute tener como minimo :value caracteres"
      ];

      // $validacion= $this->validate($request, $reglas, $mensajes);

      $validacion = Validator::make($request->all(), $reglas, $mensajes);

      if($validacion->fails()){

        return view('editarproducto')->withErrors($validator);
        } else {

          $producto = Producto::find($id);

          $path = $request->file('imagen')->store('imagenes');
          $file = basename($path);

          $producto->categoria_id = $request["categoria_id"];
          $producto->nombre = $request["nombre"];
          $producto->descripcion = $request["descripcion"];
          $producto->precio = $request["precio"];
          $producto->imagen = $file;
          $producto->stock = $request["stock"];
          $producto->tamano = $request["tamano"];
          $producto->color = $request["color"];

          $producto->save();

          return redirect('/producto');

      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $productoBorrar = Producto::find($id);
      $productoBorrar->delete();

    return redirect('/productos');
    }
}
