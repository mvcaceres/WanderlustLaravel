@extends('layouts.plantilla')

@section('css')
<link rel="stylesheet" href={{ URL::asset('css/productos.css') }}>
@endsection

@section('sectionContenido')
<main id="productos">

<h1>NUESTROS <span>PRODUCTOS</span></h1>

<div class="barra-opciones">

    <a href="/categoria/1">Maletas</a>
    <a href="/categoria/2">Mochilas</a>
    <a href="/categoria/3">NeckPillows</a>
    <a href="/categoria/4">Paraguas</a>
    <a href="/categoria/5">Bolsos</a>
    <a href="/categoria/6">Otros</a>
    <a href="/productos">Todos</a>

</div>

    <section>
      @foreach ($productos as $producto)
      <article class="form">
        <p class="cate">Categoría: <a href="/categoria/{{$producto->categoria_id}}">{{$producto->categoria_id}} </a></p>
        <p class="nom"> {{$producto->nombre}}</p>
        {{-- <p><a href="#">Comprar</a></p> --}}
        <img src="/storage/producto/{{$producto->imagen}}" alt="">
        <p class="prec">Precio $ {{$producto->precio}}</p>
        <p class="mas"><a href="/producto/{{$producto->id}}">Ver más</a></p>

      </article>
      @endforeach
    </section>

  </main>

@endsection
