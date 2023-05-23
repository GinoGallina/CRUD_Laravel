@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear usuario</h1>
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
<form class="" method="POST" action="{{route('usuarios.store')}}">
  <?
  //Genera un token para q no devuelva un error, para hacer el submit
  ?>
  @csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Confirmar Contraseña</label>
    <input type="password" class="form-control" id="confirm-password" name="confirm-password">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Roles</label>
    <select class="form-control" name="roles[]">
      @foreach($roles as $rol)
      <option value="{{$rol}}">{{$rol}}</option>
      @endforeach
    </select>
  </div>
  <a href="/usuarios" class="btn btn-danger">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop