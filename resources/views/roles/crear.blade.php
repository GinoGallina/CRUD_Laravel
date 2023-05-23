@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear Rol</h1>
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
<form class="" method="POST" action="{{route('roles.store')}}">
  <?
  //Genera un token para q no devuelva un error, para hacer el submit
  ?>
  @csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Permisos del Rol:</label>
    @foreach($permission as $value)
    <div class="container">
      <input type="checkbox" class="name" id="{{$value->id}}" name="permission[]" value="{{$value->id}}">
      <label for="{{$value->id}}" class="form-label">{{$value->name}}</label>
    </div>
    @endforeach
  </div>
  <a href="/roles" class="btn btn-danger">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop