@extends('layouts.plantilla')

@section('css')
<link rel="stylesheet" href={{ URL::asset('css/register.css') }}>
@endsection

@section('sectionContenido')

<div class="container">
  <!-- AGREGAR para que funciones el css el class containery la div calss form-->

  <main id="register">
  <div class="container">
    <h3>¡UNITE A <span>WANDERLUST!</span> </h3>
    <p class="frase">Completá tus datos y comenzá a disfrutar los beneficios de Wanderlust:</p>
  <!-- HASTA ACA -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- nombre -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
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
                      <!-- y el div de cierre -->
                        <!-- fin nombre -->

                        <!-- apellido -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
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
                      <!-- y el div de cierre -->
                        <!-- fin apellido -->

                        <!-- telefono -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
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
                      <!-- y el div de cierre -->
                        <!-- fin telefono -->

                        <!-- direccion -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">
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
                      <!-- y el div de cierre -->
                        <!-- fin direccion -->


                        <!-- provincia -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">

                            <label for="provincia" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>

                            <div class="col-md-6">
                                <select class="provincia" type="text" class="form-control @error('provincia') is-invalid @enderror" name="provincia" value="{{ old('provincia') }}" required autocomplete="provincia" autofocus></select>

                                @error('provincia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      <!-- y el div de cierre -->
                        <!-- fin provincia -->

                        <!-- ciudad -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">

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
                      <!-- y el div de cierre -->
                        <!-- fin ciudad -->

                        <!-- codigoPostal -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">

                            <label for="codigoPostal" class="col-md-4 col-form-label text-md-right">{{ __('CodigoPostal') }}</label>

                            <div class="col-md-6">
                                <input id="codigoPostal" type="text" class="form-control @error('codigoPostal') is-invalid @enderror" name="codigoPostal" value="{{ old('codigoPostal') }}" required autocomplete="codigoPostal" autofocus>

                                @error('codigoPostal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                      </div>
                      <!-- y el div de cierre -->
                        <!-- fin codigoPostal -->

                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">

                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                      </div>
                      <!-- y el div de cierre -->

                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">

                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                      </div>
                      <!-- y el div de cierre -->

                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">

                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                      </div>
                      <!-- y el div de cierre -->

                        <!-- foto -->
                        <!-- AGREGAR al incio de cada div para que funciones el css -->
                        <div class="form">

                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus>

                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                      </div>
                      <!-- y el div de cierre -->
                        <!-- fin foto -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarme') }}
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
