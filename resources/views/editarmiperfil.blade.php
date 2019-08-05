@extends('layouts.plantilla')

@section('sectionContenido')


<h1>Editar mi perfil: {{ $usuario->name }}</h1>

    <section>

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Editar Mi Perfil') }}</div>

                      <div class="card-body">
                          <form method="POST" action="/actualizarmiperfil" enctype="multipart/form-data">
                              @csrf

                              <!-- nombre -->
                              <div class="form-group row">
                                  <label for="name">{{ __('name') }}
                                    <br>
                                    Original:{{$usuario->name}}
                                    <br>
                                    Nuevo:
                                    <br>
                                  </label>

                                  <div class="col-md-6">
                                      <input  type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                  </div>
                              </div>
                              <!-- fin nombre -->

                              <!-- apellido -->
                              <div class="form-group row">
                                  <label for="apellido">{{ __('apellido') }}
                                    <br>
                                    Original:{{$usuario->apellido}}
                                    <br>
                                    Nuevo:
                                    <br>
                                  </label>

                                  <div class="col-md-6">
                                      <input  type="text" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>
                                  </div>
                              </div>
                              <!-- fin apellido -->

                              <!-- telefono -->
                              <div class="form-group row">
                                  <label for="telefono">{{ __('telefono') }}
                                    <br>
                                    Original:{{$usuario->telefono}}
                                    <br>
                                    Nuevo:
                                    <br>
                                  </label>

                                  <div class="col-md-6">
                                      <input  type="text" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
                                  </div>
                              </div>
                              <!-- fin telefono -->

                              <!-- direccion -->
                              <div class="form-group row">
                                  <label for="direccion">{{ __('direccion') }}
                                    <br>
                                    Original:{{$usuario->direccion}}
                                    <br>
                                    Nuevo:
                                    <br>
                                  </label>

                                  <div class="col-md-6">
                                      <input  type="text" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>
                                  </div>
                              </div>
                              <!-- fin direccion -->

                              <!-- direccion -->
                              <div class="form-group row">
                                  <label for="direccion">{{ __('direccion') }}
                                    <br>
                                    Original:{{$usuario->direccion}}
                                    <br>
                                    Nuevo:
                                    <br>
                                  </label>

                                  <div class="col-md-6">
                                      <input  type="text" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>
                                  </div>
                              </div>
                              <!-- fin direccion -->

                              <!-- ciudad -->
                              <div class="form-group row">
                                  <label for="ciudad">{{ __('ciudad') }}
                                    <br>
                                    Original:{{$usuario->ciudad}}
                                    <br>
                                    Nuevo:
                                    <br>
                                  </label>

                                  <div class="col-md-6">
                                      <input  type="text" name="ciudad" value="{{ old('ciudad') }}" required autocomplete="ciudad" autofocus>
                                  </div>
                              </div>
                              <!-- fin ciudad -->

                              <!-- provincia -->
                              <div class="form-group row">
                                  <label for="provincia">{{ __('provincia') }}
                                    <br>
                                    Original:{{$usuario->provincia}}
                                    <br>
                                    Nuevo:
                                    <br>
                                  </label>

                                  <div class="col-md-6">
                                      <input  type="text" name="provincia" value="{{ old('provincia') }}" required autocomplete="provincia" autofocus>
                                  </div>
                              </div>
                              <!-- fin provincia -->

                              <!-- codigoPostal -->
                              <div class="form-group row">
                                  <label for="codigoPostal">{{ __('codigoPostal') }}
                                    <br>
                                    Original:{{$usuario->codigoPostal}}
                                    <br>
                                    Nuevo:
                                    <br>
                                  </label>

                                  <div class="col-md-6">
                                      <input  type="text" name="codigoPostal" value="{{ old('codigoPostal') }}" required autocomplete="codigoPostal" autofocus>
                                  </div>
                              </div>
                              <!-- fin codigoPostal -->

                              <!-- email -->
                              <div class="form-group row">
                                  <label for="email">{{ __('email') }}
                                    <br>
                                    Original:{{$usuario->email}}
                                    <br>
                                    Nuevo:
                                    <br>
                                  </label>

                                  <div class="col-md-6">
                                      <input  type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  </div>
                              </div>
                              <!-- fin email -->

                              <!-- foto -->
                              <div class="form-group row">
                                  <label for="foto">{{ __('foto') }}
                                    <br>
                                    Original:
                                    <br>
                                    <img src="/storage/userFoto/{{$usuario->foto}}" alt="imagenDelUsuario">
                                    <br>
                                    Nuevo:
                                    <br>
                                  </label>

                                  <div class="col-md-6">
                                      <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus>

                                      <!-- @error('imagen')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror -->
                                  </div>
                              </div>
                              <!-- fin foto -->

                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Modificar Mi Perfil') }}
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

@endsection
