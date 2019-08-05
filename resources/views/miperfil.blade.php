@extends('layouts.plantilla')

@section('sectionContenido')

<h1>Detalle de Mi Perfil</h1>
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



      </article>
    </section>

@endsection
