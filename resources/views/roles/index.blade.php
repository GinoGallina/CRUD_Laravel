@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>ROLES</h1>
@stop

@section('content')
<table id="roles" class="table table-dark table-striped mt-4">
  <thead>
    <th class="text-center">Id</th>
    <th class="text-center">Nombre</th>
    <th class="text-center">Acciones</th>
  </thead>
  <tbody>
    @foreach($roles as $rol)
    <tr>
      <td class="text-center">{{$rol-> id}}</td>
      <td class="text-center">{{$rol->name}}</td>
      <td class="text-center">
        <form action=" {{route('roles.destroy',$rol->id)}} " class="borrar d-flex justify-content-around" method="POST">
          @csrf
          @method('DELETE')
          @can('editar-rol')
          <a href="{{ route('roles.edit',$rol->id) }}" class="btn btn-info">Editar</a>
          @endcan
          @can('borrar-rol')
          <button type="submit" class=" btn btn-danger boton-borrar">Borrar</button>
          @endcan
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@can('crear-rol')
<a href="roles/create" class="btn btn-primary mt-5">Crear</a>
@endcan
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
    $('#roles').DataTable({
      "lengthMenu": [
        [5, 10, 50, -1],
        [5, 10, 50, "All"]
      ]
    });
  });
</script>
@stop