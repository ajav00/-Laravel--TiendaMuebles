@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>CREAR ADMINISTRADOR</h1>
    </div>
    <div class="card-body">
        <form class="form-horizontal form-material mx-2 container">
            <div class="form-group">
                <label class="col-md-12 mb-0">Nombre</label>
                <div class="col-md-12">
                    <input type="text" 
                        class="form-control ps-0 form-control-line">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Apellido</label>
                <div class="col-md-12">
                    <input type="text" 
                        class="form-control ps-0 form-control-line">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Puesto</label>
                <div class="col-md-12">
                    <input type="text" 
                        class="form-control ps-0 form-control-line">
                </div>
            </div>
            <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                    <input type="email" admin.com"
                        class="form-control ps-0 form-control-line" name="example-email"
                        id="example-email">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Password</label>
                <div class="col-md-12">
                    <input type="password" 
                        class="form-control ps-0 form-control-line">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Celular</label>
                <div class="col-md-12">
                    <input type="text" 
                        class="form-control ps-0 form-control-line">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Dirección</label>
                <div class="col-md-12">
                    <input type="text" 8 Nro.20 "
                        class="form-control ps-0 form-control-line">
                </div>
            </div>
            
            
            <div class="form-group">
                <div class="col-sm-12 d-flex">
                    <input class="btn btn-success mx-auto mx-md-0 text-white" value="Crear"/>
                </div>
            </div>
        </form>
    </div>

    
@stop