<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class UserController extends Controller
{

    public function index()
    {
      $usuarios = User::all();
      return view('usuarios', compact('usuarios'));
    }

    public function show($id)
    {
      $usuario = User::find($id);
      return view('miperfil', compact('usuario'));
    }

    public function edit($id)
    {
      $usuario = User::find($id);
      return view('editarmiperfil', compact('usuario'));
    }

    public function update(Request $request, $id)
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

          $usuario = User::find($id);

          $path = $request->file('foto')->store('userFoto');
          $file = basename($path);

          $usuario->name = $request["name"];
          $usuario->apellido = $request["apellido"];
          $usuario->telefono = $request["telefono"];
          $usuario->direccion = $request["direccion"];
          $usuario->ciudad = $request["ciudad"];
          $usuario->provincia = $request["provincia"];
          $usuario->codigoPostal = $request["codigoPostal"];
          $usuario->email = $request["email"];
          $usuario->foto = $file;
          $usuario->save();

          return redirect('/home');

      }

    }

}
