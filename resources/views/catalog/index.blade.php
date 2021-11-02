@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="my-5 text-center">Películas disponibles</h1>
        <hr class="mt-4 mb-4">
        @foreach ($arrayPeliculas as $i => $p )
            <div class="col-4 mb-4">
                <div class="card h-100 ">

                    <img src="{{$p['poster']}}" class="card-img-top" alt="{{$p['titulo']}}">
                    <div class="card-body">
                        <h3 class="card-title">{{$p['titulo']}}</h3>
                        <p class="card-text">Director: {{$p['director']}}</p>
                        <div class="d-grid gap-2">
                            <a href="{{url('/catalog/show/'.$i)}}" class="btn btn-primary p-2"><h4>Ver Más</h4></a>

                        </div>
                    </div>

                    
                </div>
            </div>
        @endforeach

    </div>
        @stop
</div>

