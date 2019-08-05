@extends('layouts.plantilla')

@section('sectionContenido')
<main id="productos">
<h1>Lista de <span> productos</span></h1>
<div class="barra-opciones">





    <a href="/productos">Todos</a>
    <a href="/categoria/1">Maletas</a>
    <a href="/categoria/2">Mochilas</a>
    <a href="/categoria/3">NeckPillows</a>
    <a href="/categoria/4">Paraguas</a>
    <a href="/categoria/5">Bolsos</a>
    <a href="/categoria/6">Otros</a>
</div>

    <section>
      @foreach ($productos as $producto)
      <article class="form">
        <p>Categoría: <a href="/categoria/{{$producto->categoria_id}}">{{$producto->categoria_id}}</a></p>
        <p>Nombre: {{$producto->nombre}}</p>
        <p>Precio: {{$producto->precio}}</p>
        <p><a href="/producto/{{$producto->id}}">Ver más</a></p>
        {{-- <p><a href="#">Comprar</a></p> --}}
        <img src="/storage/producto/{{$producto->imagen}}" alt="">

      </article>
      @endforeach
    </section>
</main>
@endsection
