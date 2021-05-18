@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
    <form action="/articulos/{{ $articulo->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $articulo->codigo }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $articulo->descripcion }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $articulo->cantidad }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" step="any" value="{{ $articulo->precio }}">
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