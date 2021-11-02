@extends('layouts.master')
@section('content')
<h1 class="my-5 text-center">Editar Película </h1>
<hr>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control fs-4" id="titulo" aria-describedby="titulo" value="{{$pelicula['titulo']}}">
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Año</label>
                    <input type="number"  min="1900" max="2099" step="1" class="form-control fs-4" id="year" aria-describedby="year" value="{{$pelicula['year']}}">
                </div>
                <div class="mb-3">
                    <label for="director" class="form-label">Director</label>
                    <input type="text" class="form-control fs-4" id="director" aria-describedby="director" value="{{$pelicula['director']}}">
                </div>

                

                <div class="form-check mb-3">
                    @if ($pelicula['rentada'])
                        <input class="form-check-input" type="checkbox" value="" id="prestado" name="pestado" checked>
                    @else
                        <input class="form-check-input" type="checkbox" value="" id="prestado" name="pestado">
                    @endif
                    <label class="form-check-label" for="prestado">
                      Rentada
                    </label>
                </div>

                <div class="mb-3">
                    <label for="portada" class="form-label">Poster</label>
                    <input class="form-control fs-4" type="file" id="portada">
                </div>

                <div class="mb-3">
                    <label for="sinopsis" class="form-label">Sinopsis:</label>
                    <textarea style="height: 100px"  class="form-control fs-4" id="sinopsis" aria-describedby="sinopsis" >{{$pelicula['sinopsis']}}</textarea>
                </div>

                <button class="btn btn-primary fs-3 px-4" type="submit">Guardar Cambios</button>
            </form>
    
        </div>
    </div>

</div>
@stop
