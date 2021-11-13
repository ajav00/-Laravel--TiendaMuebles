@extends('layouts.master')
@section('content')
<h1 class="my-5 text-center">Nueva Película </h1>
<hr>
<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" name="titulo" class="form-control fs-4" id="titulo" value="{{ old('titulo') }}" aria-describedby="titulo">
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Año</label>
                    <input type="number" value="2020"  min="1900" max="2099" step="1" class="form-control fs-4" id="year" name="year" value="{{ old('year') }}" aria-describedby="year">
                </div>
                <div class="mb-3">
                    <label for="director" class="form-label">Director</label>
                    <input type="text" name="director" class="form-control fs-4" id="director" value="{{ old('director') }}" aria-describedby="director">
                </div>

                

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="rentada" name="rentada">
                    <label class="form-check-label" for="rentada">
                      Rentada
                    </label>
                </div>

                <div class="mb-3">
                    <label for="poster" class="form-label">Poster</label>
                    <input class="form-control fs-4" type="file" id="poster" name="poster">
                </div>

                <div class="mb-3">
                    <label for="sipnosis" class="form-label">Sinopsis:</label>
                    <textarea name="sinopsis" class="form-control fs-4" id="sinopsis" value="{{ old('sinopsis') }}" aria-describedby="sinopsis"></textarea>
                </div>

                <button class="btn btn-primary fs-3 px-4" type="submit">Guardar</button>
            </form>
    
        </div>
    </div>

</div>
@stop
