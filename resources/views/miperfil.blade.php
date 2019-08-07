@extends('layouts.plantilla')


@section('css')
<link rel="stylesheet" href={{ URL::asset('css/miperfil.css') }}>
@endsection

@section('sectionContenido')


    <section class="miPerfilSection">

      <h1>MI <span>PERFIL</span></h1>

      <article class="miPerfilArticle">

        <div class="miPerfilFoto">
          <img src="/storage/userFoto/{{$usuario->foto}}" alt="imagenDelUsuario">
        </div>

        <div class="miPerfilDatos">

        <p><span>Nombre:</span> {{$usuario->name}}</p>
        <p><span>Apellido:</span> {{$usuario->apellido}}</p>
        <p><span>Teléfono:</span> {{$usuario->telefono}}</p>
        <p><span>Dirección:</span> {{$usuario->direccion}}</p>
        <p><span>Provincia:</span> {{$usuario->provincia}}</p>
        <p><span>Ciudad:</span> {{$usuario->ciudad}}</p>
        <p><span>Código Postal:</span> {{$usuario->codigoPostal}}</p>
        <p><span>Email:</span> {{$usuario->email}}</p>

        </div>

        <div class="botonesMiPerfil">

          <form class="" action="/editarmiperfil" method="get">

              {{-- <input type="hidden" name="id" value="{{$usuario->id}}"> --}}
            <button type="submit" name="" value="">Editar Mis Datos</button>
            @csrf

          </form>

          <br>
          <form class="" action="/historial" method="get">

              {{-- <input type="hidden" name="id" value="{{$usuario->id}}"> --}}
            <button type="submit" name="" value="">Ver historial de mis compras</button>
            @csrf

          </form>

          </div>


      </article>
    </section>

@endsection
