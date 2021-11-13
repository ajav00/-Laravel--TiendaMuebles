@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="my-5 text-center">Películas disponibles</h1>
        <hr class="mt-4 mb-4">
        @foreach ($arrayPeliculas as $i => $p )
            <div class="col-4 mb-4">
                <div class="card h-100 ">
                    @if(strpos($p->poster, "http")!==false)
                        <img src="{{$p->poster}}" class="card-img-top" alt="{{$p->titulo}}">
                    @else
                        <img src="{{asset("storage/".$p->poster)}}" class="card-img-top" alt="{{$p->titulo}}">
                    @endif
                    <div class="card-body">
                        <h3 class="card-title">{{$p->titulo}}</h3>
                        <p class="card-text">Director: {{$p->director}}</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-info py-2 px-5">
                                <div class="d-grid gap-2">
                                    <a href="{{ url('/catalog/show/'.$p->id) }}" class="text-white fs-3">Ver Más</a>
                                </div>
                            </button>
                            <button class="btn btn-warning py-2 px-5">
                                <div class="d-grid gap-2">
                                    <a href="{{ url('/catalog/edit/'.$p->id) }}" class=" fs-3">Editar</a>
                                </div>
                            </button>
                        </div>
                    </div>

                    
                </div>
            </div>
        @endforeach

    </div>
        @stop
</div>

