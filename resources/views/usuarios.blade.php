@extends('layouts.plantilla')

@section('sectionContenido')

<h1>Lista de usuarios</h1>
    <section>
      @foreach ($usuarios as $usuario)
      <article>
        <p>Nombre: {{$usuario->name}}</p>

      </article>
      @endforeach
    </section>

@endsection
