@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear Usuario</h1>
@stop

@section('content')
@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
  <h3>Revise los campos!</h3>
  @foreach($errors as $error)
  {{$error}}
  @endforeach
  <button type="button" class="close" data-dismiss="alert" aria-label="close">X</button>
</div>
@endif
<form class="" method="POST" action="{{route('blogs.store')}}">
  <?
  //Genera un token para q no devuelva un error, para hacer el submit
  ?>
  @csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo">
  </div>
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Contenido</label>
    <input type="text" class="form-control" id="contenido" name="contenido">
  </div>
  <a href="/blogs" class="btn btn-danger">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop