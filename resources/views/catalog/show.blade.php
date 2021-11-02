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
                    <p>Director:</p>
                </div>
                <div class="col-md-8">
                    <p>{{$pelicula['director']}}</p>
                </div>
            </div> 
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <h4>Año:</h4>
                </div>
                <div class="col-md-8">
                    <p>{{$pelicula['year']}}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <h4>Rentada:</h4>
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
                    <h4>Sinopsis:</h4>
                </div>
                <div class="col-md-8">
                    <p>{{$pelicula['sinopsis']}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop