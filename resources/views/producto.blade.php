@extends('layouts.plantilla')

@section('css')
<link rel="stylesheet" href={{ URL::asset('css/vistaproducto.css') }}>
@endsection

@section('sectionContenido')
<main id="producto">

<h1>DETALLE DEL <span>PRODUCTO</span></h1>

<section class="producto">
      <article class="card">
        <img id="imagenProducto" src="/storage/producto/{{$producto->imagen}}" alt="">
        <div class="bloque">
        <p class="nom"> {{$producto->nombre}}</p>
        <p class="desc">Descripción: {{$producto->descripcion}}</p>
        <p class="prec">Precio $ {{$producto->precio}}</p>
        {{-- <p><a href="#">Comprar</a></p> --}}
        <form class="" action="/agregaralcarrito" method="post">
          @csrf
          <input type="number" name="cantidad" value="" placeholder="Cantidad">
          {{$errors->first('cantidad')}}
          <input type="hidden" name="id" value="{{$producto->id}}">
          <p></p>
          <button type="submit">Agregar al carrito</button>
        </form>

        @if(Auth::user()->isadmin ==1 )
        <div class="botones">
        <form class="" action="/editarproducto/{{$producto->id}}" method="get">
            {{-- <input type="hidden" name="id" value="{{$producto->id}}"> --}}
          <input type="submit" name="" value="Editar Producto">
          @csrf

        </form>

        <form class="" action="/borrarproducto/{{$producto->id}}" method="get">

            {{-- <input type="hidden" name="id" value="{{$producto->id}}"> --}}
          <input type="submit" name="" value="Borrar Producto">
          @csrf

          </form>

        </div>
        @endif
      </div>
        </article>
    </section>
  </main>
@endsection
