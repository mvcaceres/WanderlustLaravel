@extends('layouts.plantilla')

@section('sectionContenido')

<h1>Mi Perfil</h1>
    <section>
      <article>
        <img src="/storage/userFoto/{{$usuario->foto}}" alt="imagenDelUsuario">

        <p>Nombre: {{$usuario->name}}</p>
        <p>Apellido: {{$usuario->apellido}}</p>
        <p>Teléfono: {{$usuario->telefono}}</p>
        <p>Dirección: {{$usuario->direccion}}</p>
        <p>Ciudad: {{$usuario->ciudad}}</p>
        <p>Provincia: {{$usuario->provincia}}</p>
        <p>Código Postal: {{$usuario->codigoPostal}}</p>
        <p>Email: {{$usuario->email}}</p>

        <form class="" action="/editarmiperfil" method="get">

            {{-- <input type="hidden" name="id" value="{{$usuario->id}}"> --}}
          <input type="submit" name="" value="Editar Mis Datos">
          @csrf

        </form>

        <br>
        <form class="" action="/historial" method="get">

            {{-- <input type="hidden" name="id" value="{{$usuario->id}}"> --}}
          <input type="submit" name="" value="Ver historial de mis compras">
          @csrf

        </form>

      </article>
    </section>

@endsection
