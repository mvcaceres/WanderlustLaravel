@extends('layouts.plantilla')

@section('sectionContenido')

<h1>Carrito</h1>
    <section>
      <article>
        <ul>
          @forelse ($carts as $item)
              <li>Nombre: {{$item->nombre}} | Cantidad: {{$item->cantidad}} | Precio: {{$item->precio}} | sub-total: {{$item->precio * $item->cantidad}} <a href="/borrardelcarrito/{{$item->id}}">Eliminar</a></li>
          @empty
            <p>Su carrito está vacío.</p>
          @endforelse
        </ul>
      </article>
      <p>Total: {{$total}}</p>
      {{-- <p>Total2: {{$total2}}</p> --}}
    </section>
    <form class="" action="/cerrarcarrito" method="post">
      @csrf
      <button type="submit"> Comprar </button>
    </form>

    @endsection