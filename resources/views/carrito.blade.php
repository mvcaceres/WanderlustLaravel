@extends('layouts.plantilla')

@section('css')
<link rel="stylesheet" href={{ URL::asset('css/carrito.css') }}>
@endsection

@section('sectionContenido')

<main id="carrito">

<h1>Mi <span>carrito</span></h1>

<div class="recuadro">
    <section class="card">
      <article class="lista-compra">
        <ul>
          @forelse ($carts as $item)
              <li>Producto: {{$item->nombre}} | Cantidad: {{$item->cantidad}} <br> Precio $ {{$item->precio}}  <br>  Sub-total $ {{$item->precio * $item->cantidad}}     <a href="/borrardelcarrito/{{$item->id}}">Eliminar</a></li>
          @empty
            <p class="vacio">Su carrito está vacío.</p>
          @endforelse
        </ul>
      </article>
      <p>Total: {{$total}}</p>
      {{-- <p>Total2: {{$total2}}</p> --}}
    </section>
  </div>
    <form class="" action="/cerrarcarrito" method="post">
      @csrf
      <button type="submit"> Comprar </button>
    </form>
</main>
    @endsection
