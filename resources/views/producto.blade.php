@extends('layouts.plantilla')

@section('sectionContenido')

<h1>Detalle del producto</h1>
    <section>
      <article>
        <p>Nombre: {{$producto->nombre}}</p>
        <p>Descripción: {{$producto->descripcion}}</p>
        <p>Precio: {{$producto->precio}}</p>
        {{-- <p><a href="#">Comprar</a></p> --}}
        <form class="" action="/agregaralcarrito" method="post">
          @csrf
          <input type="number" name="cantidad" value="" placeholder="Cantidad">
          {{$errors->first('cantidad')}}
          <input type="hidden" name="id" value="{{$producto->id}}">
          <p></p>
          <button type="submit">Agregar al carrito</button>
        </form>


        @if(Auth::user()->isadmin==1)
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
        @endif
        <img src="/storage/producto/{{$producto->imagen}}" alt="">

      </article>
    </section>

@endsection
