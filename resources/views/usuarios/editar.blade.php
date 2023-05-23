@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar Usuario</h1>
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
<form class="" method="POST" action="{{route('usuarios.update',$user->id)}}">
  <?
  //Asi se pone PUT(actualizacion) en laravel
  ?>
  @method('PUT')
  <?
  //Genera un token para q no devuelva un error, para hacer el submit
  ?>
  @csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Confirmar Contraseña</label>
    <input type="password" class="form-control" id="confirm-password" name="confirm-password" value="{{$user->password}}">
  </div>
  <div class=" mb-3">
    <label for="exampleInputEmail" class="form-label">Roles</label>
    <select class="form-control" id="roles" name="roles">
      @foreach($roles as $rol)
      <option>{{$rol}}</option>
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