@extends('layouts.plantilla')

@section('sectionContenido')

<h1>Lista de productos</h1>
    <a href="/productos">Todos</a>
    <a href="/categoria/1">Maletas</a>
    <a href="/categoria/2">Mochilas</a>
    <a href="/categoria/3">NeckPillows</a>
    <a href="/categoria/4">Paraguas</a>
    <a href="/categoria/5">Bolsos</a>
    <a href="/categoria/6">Otros</a>
    <section>
      @foreach ($productos as $producto)
      <article>
        <p>Categoría: <a href="/categoria/{{$producto->categoria_id}}">{{$producto->categoria_id}}</a></p>
        <p>Nombre: {{$producto->nombre}}</p>
        <p>Precio: {{$producto->precio}}</p>
        <p><a href="/producto/{{$producto->id}}">Ver más</a></p>
        {{-- <p><a href="#">Comprar</a></p> --}}
        <img src="/storage/producto/{{$producto->imagen}}" alt="">

      </article>
      @endforeach
    </section>

@endsection
