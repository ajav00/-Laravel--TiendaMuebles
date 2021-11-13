@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>CREAR ADMINISTRADOR</h1>
    </div>
    <div class="card-body">
        <form class="form-horizontal form-material mx-2 container" method="POST">
        @csrf
            <div class="form-group">
                <label class="col-md-12 mb-0">Nombre</label>
                <div class="col-md-12">
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                        class="form-control ps-0 form-control-line">
                    @error('nombre')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Apellido</label>
                <div class="col-md-12">
                    <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" 
                        class="form-control ps-0 form-control-line">
                    @error('apellido')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Puesto</label>
                <div class="col-md-12">
                    <input type="text" name="puesto" id="puesto" value="{{ old('puesto') }}" 
                        class="form-control ps-0 form-control-line">
                    @error('puesto')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" 
                        class="form-control ps-0 form-control-line" name="example-email">
                    @error('email')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Password</label>
                <div class="col-md-12">
                    <input type="password" name="password" id="password" value="{{ old('password') }}" 
                        class="form-control ps-0 form-control-line">
                    @error('password')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Celular</label>
                <div class="col-md-12">
                    <input type="text" name="celular" id="celular" value="{{ old('celular') }}" 
                        class="form-control ps-0 form-control-line">
                    @error('celular')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Dirección</label>
                <div class="col-md-12">
                    <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}" 
                        class="form-control ps-0 form-control-line">
                    @error('direccion')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            
            
            <div class="form-group">
                <div class="col-sm-12 d-flex">
                    
                    <input type="submit"   class="btn btn-success mx-auto mx-md-0 text-white" value="Crear"/>
                </div>
            </div>
        </form>
    </div>

    
@stop