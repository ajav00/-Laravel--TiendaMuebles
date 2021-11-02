@extends('layouts.master')
@section('content')

<div class="container">
    <h1 class="text-center my-4">{{$pelicula['titulo']}}</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{$pelicula['poster']}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 mt-5">
            <div class="row">
                <div class="col-md-4">
                    <p class="fw-bold">Director:</p>
                </div>
                <div class="col-md-8">
                    <p>{{$pelicula['director']}}</p>
                </div>
            </div> 
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p class="fw-bold">Año:</p>
                </div>
                <div class="col-md-8">
                    <p>{{$pelicula['year']}}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p class="fw-bold">Rentada:</p>
                </div>
                <div class="col-md-8">
                    @if ($pelicula['rentada'])
                        <span class="badge bg-danger">No disponible</span>
                    @else
                        <span class="badge bg-info">Disponible</span>
                    @endif
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p class="fw-bold">Sinopsis:</p>
                </div>
                <div class="col-md-8">
                    <p>{{$pelicula['sinopsis']}}</p>
                </div>
            </div>
            <button class="btn btn-success py-2 px-5">
                <div class="d-grid gap-2">
                    <a href="{{ url('/catalog') }}" class="text-white fs-3">Volver</a>
                </div>
            </button>
            
        </div>
    </div>
</div>

@stop