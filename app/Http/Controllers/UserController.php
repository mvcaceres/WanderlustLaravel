<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class UserController extends Controller
{

    public function index()
    {
      $usuarios = User::all();
      return view('usuarios', compact('usuarios'));
    }

    public function show()
    {
      $usuario = Auth::user();
      return view('miperfil', compact('usuario'));
    }

    public function edit()
    {
      $usuario = Auth::user();
      return view('editarmiperfil', compact('usuario'));
    }

    public function update(Request $request)
    {
      $reglas = [
        "name" => "required|string|min:2",
        "apellido" => "required|string|min:2",
      ];

      $mensajes = [
        "string" => "El campo :attribute  debe ser de texto.",
        "required" => "El campo :attribute debe completarse",
        "min" => "El campo debe :attribute tener como minimo :value caracteres"
      ];

      // $validacion= $this->validate($request, $reglas, $mensajes);

      $validacion = Validator::make($request->all(), $reglas, $mensajes);

      if($validacion->fails()){

        return view('editarmiperfil')->withErrors($validator);
        } else {

          $usuario = Auth::user();

          if($request['foto']){
            $path = $request->file('foto')->store('/public/userFoto');
            $file = basename($path);
            $usuario->foto = $file;
          }



          $usuario->name = $request["name"];
          $usuario->apellido = $request["apellido"];
          $usuario->telefono = $request["telefono"];
          $usuario->direccion = $request["direccion"];
          $usuario->ciudad = $request["ciudad"];
          $usuario->provincia = $request["provincia"];
          $usuario->codigoPostal = $request["codigoPostal"];
          $usuario->email = $request["email"];

          $usuario->save();

          return redirect('/miperfil');

      }

    }

}
