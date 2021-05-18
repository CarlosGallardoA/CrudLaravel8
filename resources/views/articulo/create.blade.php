@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Crear</h1>
@stop

@section('content')
    <form action="/articulos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" step="any" value="0.00" tabindex="3">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
@stop