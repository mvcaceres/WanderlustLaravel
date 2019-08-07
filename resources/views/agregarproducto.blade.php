@extends('layouts.plantilla')

@section('css')

<link rel="stylesheet" href={{ URL::asset('css/editarproducto.css') }}>
@endsection

@section('sectionContenido')

<h1><span>AGREGAR </span>NUEVO PRODUCTO</h1>

<div class="container">
            <div class="card">
              <div class="card-body">
                    <form method="POST" action="/agregarproducto" enctype="multipart/form-data">
                        @csrf
                        {{-- {{csrf_field()}} --}}
                        <!-- categoria_id -->
                        <div class="lineasDatos">
                            <label for="categoria_id">Categoría:</label>
                            <div class="nuevo">
                            <select  type="text" name="categoria_id"  required autocomplete="categoria_id" autofocus>

                              @foreach ($categorias as $categoria)
                              <option value="{{$categoria->id}}"
                                @if(old('categoria_id')== $categoria->id)
                                 selected
                                @endif
                              >

                                  {{$categoria->nombre}}
                              </option>
                              @endforeach

                            </select>
                            </div>
                        </div>
                        <!-- fin categoria_id -->

                        <!-- nombre -->
                        <div class="lineasDatos">
                            <label for="nombre">Nombre:</label>
                            <div class="nuevo">
                            <input  type="text" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                            </div>
                        </div>
                        <!-- fin nombre -->

                        <!-- descripcion -->
                        <div class="lineasDatos">
                            <label for="descripcion">Descripción:</label>

                            <div class="nuevo">
                                <input  type="text" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion" autofocus>
                            </div>
                        </div>
                        <!-- fin descripcion -->

                        <!-- precio -->
                        <div class="lineasDatos">
                            <label for="precio">Precio:</label>

                            <div class="nuevo">
                                <input  type="text" name="precio" value="{{ old('precio') }}" required autocomplete="precio" autofocus>
                            </div>
                        </div>
                        <!-- fin precio -->

                        <!-- imagen -->
                        <div class="lineasDatos">
                            <label for="imagen">Imagen:</label>

                            <div class="nuevo">
                                <input type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" value="{{ old('imagen') }}" required autocomplete="imagen" autofocus>

                                <!-- @error('imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>
                        <!-- fin imagen -->

                        <!-- stock -->
                        <div class="lineasDatos">
                            <label for="stock">Stock:</label>

                            <div class="nuevo">
                                <input  type="text" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>
                            </div>
                        </div>
                        <!-- fin stock -->

                        <!-- tamano -->
                        <div class="lineasDatos">
                            <label for="precio">Tamano:</label>

                            <div class="nuevo">
                                <input  type="text" name="tamano" value="{{ old('tamano') }}" required autocomplete="tamano" autofocus>
                            </div>
                        </div>
                        <!-- fin tamano -->

                        <!-- color -->
                        <div class="lineasDatos">
                            <label for="color">Color:</label>

                            <div class="nuevo">
                                <input  type="text" name="color" value="{{ old('color') }}" required autocomplete="color" autofocus>
                            </div>
                        </div>
                        <!-- fin color -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar Producto') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
