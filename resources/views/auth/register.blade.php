@extends('layouts.plantilla')

@section('sectionContenido')
<div class="container">
  <!-- AGREGAR para que funciones el css el class containery la div calss form-->

  <main id="register">
  <div class="container">
    <h3>¡UNITE A <span>WANDERLUST!</span> </h3>
    <p class="frase">Completá tus datos y comenzá a disfrutar los beneficios de Wanderlust:</p>
  <!-- HASTA ACA -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- nombre -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->
                        <!-- fin nombre -->

                        <!-- apellido -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->
                        <!-- fin apellido -->

                        <!-- telefono -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->
                        <!-- fin telefono -->

                        <!-- direccion -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>

                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->
                        <!-- fin direccion -->

                        <!-- ciudad -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="ciudad" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                            <div class="col-md-6">
                                <input id="ciudad" type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" value="{{ old('ciudad') }}" required autocomplete="ciudad" autofocus>

                                @error('ciudad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->
                        <!-- fin ciudad -->

                        <!-- provincia -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="provincia" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>
                            
                            <div class="col-md-6">
                                <select id="provincia" type="text" class="form-control @error('provincia') is-invalid @enderror" name="provincia" value="{{ old('provincia') }}" required autocomplete="provincia" autofocus>
                                </select>
                                @error('provincia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>" Ingrese su provincia"</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->
                        <!-- fin provincia -->

                        <!-- codigoPostal -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="codigoPostal" class="col-md-4 col-form-label text-md-right">{{ __('Codigo Postal') }}</label>

                            <div class="col-md-6">
                                <input id="codigoPostal" type="text" class="form-control @error('codigoPostal') is-invalid @enderror" name="codigoPostal" value="{{ old('codigoPostal') }}" required autocomplete="codigoPostal" autofocus>

                                @error('codigoPostal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>"Ingrese el codigo postal"</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->
                        <!-- fin codigoPostal -->

                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>"Ingrese su correo electronico"</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->

                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>"Ingrese su contraseña"
                                    </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->

                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->

                        <!-- foto -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto de Perfil') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus>

                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>"Suba una foto de perfil"</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <!-- y el div de cierre -->
                        <!-- fin foto -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
