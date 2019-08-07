@extends('layouts.plantilla')

@section('css')

<link rel="stylesheet" href={{ URL::asset('css/editarproducto.css') }}>
@endsection

@section('sectionContenido')


<h1><span>EDITAR PRODUCTO: </span>{{ $producto->nombre }}</h1>

    <section>

      <div class="container">
                  <div class="card">
                      <div class="card-body">
                          <form method="POST" action="/actualizarproducto/{{$producto->id}}" enctype="multipart/form-data">
                              @csrf

                              <!-- categoria_id -->
                              <div class="lineasDatos">
                                  <label for="categoria_id">Categoría:</label>
                                  <div class="nuevo">
                                  <select  type="text" name="categoria_id" required autocomplete="categoria_id" autofocus>
                                    @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}"
                                      @if(old('categoria_id', $producto->categoria_id)== $categoria->id)
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
                                  <input  type="text" name="nombre" value="{{$producto->nombre}}" required autocomplete="nombre" autofocus>
                                  </div>
                              </div>
                              <!-- fin nombre -->

                              <!-- descripcion -->
                              <div class="lineasDatos">
                                  <label for="descripcion">Descripción:</label>
                                  <div class="nuevo">
                                  <input  type="text" name="descripcion" value="{{$producto->descripcion}}" required autocomplete="descripcion" autofocus>
                                  </div>
                              </div>
                              <!-- fin descripcion -->

                              <!-- precio -->
                              <div class="lineasDatos">
                                  <label for="precio">Precio:</label>
                                  <div class="nuevo">
                                  <input  type="text" name="precio" value="{{$producto->precio}}" required autocomplete="precio" autofocus>
                                  </div>
                              </div>
                              <!-- fin precio -->



                              <!-- stock -->
                              <div class="lineasDatos">
                                  <label for="stock">Stock:</label>
                                  <div class="nuevo">
                                  <input  type="text" name="stock" value="{{$producto->stock}}" required autocomplete="stock" autofocus>
                                  </div>
                              </div>
                              <!-- fin stock -->

                              <!-- tamano -->
                              <div class="lineasDatos">
                                  <label for="precio">Precio:</label>
                                  <div class="nuevo">
                                  <input  type="text" name="tamano" value="{{$producto->tamano}}" required autocomplete="tamano" autofocus>
                                  </div>
                              </div>
                              <!-- fin tamano -->

                              <!-- color -->
                              <div class="lineasDatos">
                                  <label for="color">Color:</label>
                                  <div class="nuevo">
                                  <input  type="text" name="color" value="{{$producto->color}}" required autocomplete="color" autofocus>
                                  </div>
                              </div>
                              <!-- fin color -->

                              <!-- imagen -->
                              <div class="lineasDatos">
                                  <label for="imagen">Imagen: </label>
                                  <div class="contenedorImgOriginalYNueva">

                                  <div id=divOriginalImg class="original">
                                    <div class="contenedorImagenEditar">
                                      <img src="/storage/producto/{{$producto->imagen}}" alt="imagenDelProducto">
                                    </div>
                                  </div>
                                  <div id=divNuevoImg class="nuevo">
                                  <input type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" autocomplete="imagen" autofocus>
                                  </div>
                                      <!-- @error('imagen')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror -->
                                  </div>
                              </div>
                              <!-- fin imagen -->

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
          </div>
      </div>
    </section>

@endsection
