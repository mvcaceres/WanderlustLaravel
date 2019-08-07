@extends('layouts.plantilla')

@section('css')
<link rel="stylesheet" href={{ URL::asset('css/historialcarrito.css') }}>
@endsection


@section('sectionContenido')
<main id="carritos">
<h1>Mis <span>carritos</span></h1>

        <ul>
          @forelse ($carts as $cart)
            <div class="recuadro">
            Código de compra: 000{{$cart[0]->numerocarrito}}
            @foreach ($cart as $item)
            <section class="card">
              <li>{{$item->nombre}}, {{$item->precio}}
                <br>
                Cantidad: {{$item->cantidad}}
              </li>
            @endforeach
              </section>
              </div>
          @empty
            <p class="vacio">No tiene historial de carritos</p>
          @endforelse
        </ul>



</main>
@endsection
