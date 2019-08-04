@extends('layouts.plantilla')

@section('sectionContenido')

<h1>Mis carritos</h1>
    <section>

        <ul>
          @forelse ($carts as $cart)
            Numero de carrito: {{$cart[0]->numerocarrito}}
            @foreach ($cart as $item)
              <li>{{$item->nombre}}, {{$item->precio}}</li>
            @endforeach
          @empty
            <p>No tiene historial de carritos</p>
          @endforelse
        </ul>



    </section>

@endsection