@extends('layouts.plantilla')

@section('css')
<link rel="stylesheet" href={{ URL::asset('css/productos.css') }}>
@endsection

@section('sectionContenido')

<main id="productos">

<h1>NUESTROS <span>PRODUCTOS</span></h1>

@if(Auth::user()->isadmin ==1 )
<div class="botonesAdmin">
<form class="" action="/agregarproducto" method="get">
    {{-- <input type="hidden" name="id" value=""> --}}
  <input type="submit" name="" value="Agregar Nuevo Producto">
  @csrf

</form>
</div>
@endif

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
        <div class="containerImg">
          <img src="/storage/producto/{{$producto->imagen}}" alt="">
        </div>

        <p class="prec">Precio $ {{$producto->precio}}</p>
        <p class="mas"><a href="/producto/{{$producto->id}}">Ver más</a></p>

      </article>
      @endforeach

    </section>

      {{$productos->links()}}


  </main>

@endsection
