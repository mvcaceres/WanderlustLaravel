@extends('layouts.plantilla')

@section('css')
<link rel="stylesheet" href={{ URL::asset('css/editarmiperfil.css') }}>
@endsection

@section('sectionContenido')

<h1><span>EDITAR </span>MIS DATOS</h1>

    <section>

      <div class="container">
                  <div class="card">
                      <div class="card-body">
                          <form method="POST" action="/actualizarmiperfil" enctype="multipart/form-data">
                              @csrf

                              <!-- nombre -->
                                <div class="lineasDatos">
                                    <label for="name">Nombre:</label>
                                    <div class="nuevo">
                                    <input  type="text" name="name" value="{{$usuario->name}}" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                              <!-- fin nombre -->

                              <!-- apellido -->
                                <div class="lineasDatos">
                                    <label for="apellido">Apellido:</label>
                                    <div class="nuevo">
                                    <input  type="text" name="apellido" value="{{$usuario->apellido}}" required autocomplete="apellido" autofocus>
                                    </div>
                                </div>
                              <!-- fin apellido -->

                              <!-- telefono -->
                                <div class="lineasDatos">
                                  <label for="telefono">Telefono:</label>
                                  <div class="nuevo">
                                  <input  type="text" name="telefono" value="{{$usuario->telefono}}" required autocomplete="telefono" autofocus>
                                  </div>
                              </div>
                              <!-- fin telefono -->

                              <!-- direccion -->
                                <div class="lineasDatos">
                                  <label for="direccion">Dirección:</label>
                                  <div class="nuevo">
                                  <input  type="text" name="direccion" value="{{$usuario->direccion}}" required autocomplete="direccion" autofocus>
                                  </div>
                              </div>
                              <!-- fin direccion -->

                              <!-- provincia -->
                                <div class="lineasDatos">
                                  <label for="provincia">Provincia:</label>
                                  <div class="nuevo">
                                  <select class="provincia" type="text" name="provincia" required autocomplete="provincia" autofocus>Provincia
                                    <option>{{$usuario->provincia}}</option>
                                  </select>
                                  </div>

                              </div>



                              <!-- fin provincia -->

                              <!-- ciudad -->
                                <div class="lineasDatos">
                                  <label for="ciudad">Ciudad:</label>
                                  <div class="nuevo">
                                  <input  type="text" name="ciudad" value="{{$usuario->ciudad}}" required autocomplete="ciudad" autofocus>
                                  </div>
                              </div>
                              <!-- fin ciudad -->

                              <!-- codigoPostal -->
                                <div class="lineasDatos">
                                  <label for="codigoPostal">Código postal:</label>
                                  <div class="nuevo">
                                  <input  type="text" name="codigoPostal" value="{{$usuario->codigoPostal}}" required autocomplete="codigoPostal" autofocus>
                                  </div>
                              </div>
                              <!-- fin codigoPostal -->

                              <!-- email -->
                                <div class="lineasDatos">
                                  <label for="email">E-mail:</label>
                                  <div class="nuevo">
                                  <input  type="text" name="email" value="{{$usuario->email}}" required autocomplete="email" autofocus>
                                  </div>
                              </div>
                              <!-- fin email -->

                              <!-- foto -->
                                <div class="lineasDatos">
                                  <label for="foto">Foto:</label>
                                  <div class="contenedorImgOriginalYNueva">

                                  <div id=divOriginalImg class="original">
                                      <div class="contenedorImagenEditar">
                                        <img src="/storage/userFoto/{{$usuario->foto}}" alt="imagenDelUsuario">
                                      </div>
                                  </div>
                                  <div id=divNuevoImg class="nuevo">
                                  <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="/storage/userFoto/{{$usuario->foto}}" autocomplete="foto" autofocus>
                                  </div>
                                  </div>

                                  </div>
                                      <!-- @error('imagen')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror -->

                              <!-- fin foto -->

                                <div class="divfinalCambiosPerfil">
                                  <div class="divCambiosPerfil">
                                      <button type="submit" class="botonCambiosPerfil">
                                          {{ __('Guardar cambios') }}
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>

      </div>
    </section>

@endsection
