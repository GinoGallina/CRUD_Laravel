@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>USUARIOS</h1>
@stop

@section('content')
<table id="usuarios" class="table table-dark table-striped mt-4">
  <thead>
    <th class="text-center">Id</th>
    <th class="text-center">Nombre</th>
    <th class="text-center">Email</th>
    <th class="text-center">Rol</th>
    <th class="text-center">Acciones</th>
  </thead>
  <tbody>
    @foreach($usuarios as $usuario)
    <tr>
      <td class="text-center">{{$usuario-> id}}</td>
      <td class="text-center">{{$usuario->name}}</td>
      <td class="text-center">{{$usuario->email}}</td>
      <td class="text-center">
        @if(!empty($usuario->getRoleNames()))
        @foreach($usuario->getRoleNames() as $rol)
        {{$rol}}
        @endforeach
        @endif
      </td>
      <td class="text-center">
        <form action=" {{route('usuarios.destroy',$usuario->id)}} " class="borrar d-flex justify-content-around" method="POST">
          @csrf
          @method('DELETE')
          <a href="{{ route('usuarios.edit',$usuario->id) }}" class="btn btn-info">Editar</a>
          <button type="submit" class=" btn btn-danger boton-borrar">Borrar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<a href="usuarios/create" class="btn btn-primary mt-5">Crear</a>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</link>
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#usuarios').DataTable({
      "lengthMenu": [
        [5, 10, 50, -1],
        [5, 10, 50, "All"]
      ]
    });
  });
</script>
@stop