@extends('layouts.plantilla')

@section('sectionContenido')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar Producto') }}</div>

                <div class="card-body">
                    <form method="POST" action="/agregarproducto" enctype="multipart/form-data">
                        @csrf
                        {{-- {{csrf_field()}} --}}
                        <!-- categoria_id -->
                        <div class="form-group row">
                            <label for="categoria_id">{{ __('categoria_id') }}</label>

                            <div class="col-md-6">
                                <input  type="text" name="categoria_id" value="{{ old('categoria_id') }}" required autocomplete="categoria_id" autofocus>
                            </div>
                        </div>
                        <!-- fin categoria_id -->

                        <!-- nombre -->
                        <div class="form-group row">
                            <label for="nombre">{{ __('nombre') }}</label>

                            <div class="col-md-6">
                                <input  type="text" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                            </div>
                        </div>
                        <!-- fin nombre -->

                        <!-- descripcion -->
                        <div class="form-group row">
                            <label for="descripcion">{{ __('descripcion') }}</label>

                            <div class="col-md-6">
                                <input  type="text" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion" autofocus>
                            </div>
                        </div>
                        <!-- fin descripcion -->

                        <!-- precio -->
                        <div class="form-group row">
                            <label for="precio">{{ __('precio') }}</label>

                            <div class="col-md-6">
                                <input  type="text" name="precio" value="{{ old('precio') }}" required autocomplete="precio" autofocus>
                            </div>
                        </div>
                        <!-- fin precio -->

                        <!-- imagen -->
                        <div class="form-group row">
                            <label for="imagen">{{ __('imagen') }}</label>

                            <div class="col-md-6">
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
                        <div class="form-group row">
                            <label for="stock">{{ __('stock') }}</label>

                            <div class="col-md-6">
                                <input  type="text" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>
                            </div>
                        </div>
                        <!-- fin stock -->

                        <!-- tamano -->
                        <div class="form-group row">
                            <label for="precio">{{ __('tamano') }}</label>

                            <div class="col-md-6">
                                <input  type="text" name="tamano" value="{{ old('tamano') }}" required autocomplete="tamano" autofocus>
                            </div>
                        </div>
                        <!-- fin tamano -->

                        <!-- color -->
                        <div class="form-group row">
                            <label for="color">{{ __('color') }}</label>

                            <div class="col-md-6">
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
